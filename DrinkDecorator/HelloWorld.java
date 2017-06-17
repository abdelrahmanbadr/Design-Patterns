public class HelloWorld{

     public static void main(String []args){
        
        Drink concreate= new Concreate();
        Drink cup=new Milk(concreate);
        Drink coffe=new Coffe(cup);
        
        System.out.println(coffe.getCost());
         System.out.println(coffe.getDesc());
     }
}
