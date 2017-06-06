public class HelloWorld{

     public static void main(String []args){
       // System.out.println("Hello World");
       Bird birdObj=new Bird();
       birdObj.fly();
       birdObj.setFly(new Cantfly());
       birdObj.fly();
       
       System.out.println(birdObj.getName());
     }
}
