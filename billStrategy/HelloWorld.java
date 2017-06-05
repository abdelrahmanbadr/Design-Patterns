public class HelloWorld {

     public static void main(String []args){
         Strategy myObj=new Discount();
         
         Manager manager=new Manager(new Regular());
         
           System.out.println(manager.getBill(10));
         
        System.out.println(myObj.getBill(10));
     }
}
