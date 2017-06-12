public class Tona extends DecoratorPizza {
    public Tona(Pizza pizzaObj){
        super(pizzaObj);
    }
      public String getDesc(){
          return pizzaObj.getDesc()+",Tonna";
          
      }
    public double getCost(){
        return pizzaObj.getCost()+ 20.00;
    }
    
}