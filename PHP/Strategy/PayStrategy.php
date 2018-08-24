<?php
namespace DesignPatterns\Strategy;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Http\Request;
abstract class  PayStrategy 
{
    public  $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    abstract protected function Pay();

}



Class AuthorizePayment extends PayStrategy  
{
    

    public function Pay()
    {
        
        $dataValue = $this->request->dataValue;
        $dataDescriptor = $this->request->dataDescriptor;
        $refId = 'ref' . time();

        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(Cache::get('paymentKey'));
        $merchantAuthentication->setTransactionKey(Cache::get('transactionKey'));

        $opaqueData = new AnetAPI\OpaqueDataType();
        $opaqueData->setDataDescriptor($dataDescriptor);
        $opaqueData->setDataValue($dataValue);
         
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setOpaqueData($opaqueData);
        
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction"); 
        $transactionRequestType->setAmount($this->request->totalPrice/100);
        $transactionRequestType->setPayment($paymentOne);
      
        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        if(Cache::get('paymentMode') == "test")
            $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        else
            $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);
        if(!empty($response) && $response->getMessages()->getResultCode() == "Ok")
        {
            $id =$this->request->objectId;
            $itemsCount=$this->request->itemsCount;
            $redirectionFunction=  $this->request->checkoutType;
            return $this->$redirectionFunction($id,$itemsCount);
        }else{
            echo "ERR";
        }
     }
}
Class StripePayment  extends PayStrategy  
{
    public function Pay()
    {
       
        Stripe::setApiKey(Cache::get('paymentSecretKey'));
        $customer = Customer::create(array(
            'email' => $this->request->stripeEmail,
            'source'  => $this->request->stripeToken
        ));

        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount'   => $this->request->totalPrice,
            'currency' => 'usd'
        ));
    }
}
Class PayPalPayment  extends PayStrategy  
{
    public function Pay()
    {
        echo "paypal";
    
    }
}
Class Context {
    private $strategy;
    public function __construct(PayStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
    public function pay()
    {
        return  $this->strategy->pay();
     }

}

