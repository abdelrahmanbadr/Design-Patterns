public class DecoratorPizza implements Pizza{
 protected Pizza pizzaObj; 
 public DecoratorPizza(Pizza pizzaObj){
     this.pizzaObj=pizzaObj;
 }   
  public String getDesc(){
          return pizzaObj.getDesc();
          
      }
    public double getCost(){
        return pizzaObj.getCost();
    }
}