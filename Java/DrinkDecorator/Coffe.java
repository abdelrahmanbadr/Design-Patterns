public class Coffe implements Drink{
    public Drink drink;
    
    public Coffe(Drink drink){
        this.drink=drink;
    }
  public int getCost(){
      return drink.getCost()+25;
  }
  public String getDesc(){
   return drink.getDesc()+"Coffe";
  }
  
}