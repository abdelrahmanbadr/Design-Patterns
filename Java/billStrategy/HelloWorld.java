public class HelloWorld {

     public static void main(String []args){
         
         //with strategy design pattern  class behavior can be changed at run time
           Shop shopWithoutDiscount=new Shop(new Regular());
           Shop shopWithDiscount=new Shop(new Discount());
         
           System.out.println(shopWithoutDiscount.getBill(10));
          System.out.println(shopWithDiscount.getBill(10));
         
        
     }
}
