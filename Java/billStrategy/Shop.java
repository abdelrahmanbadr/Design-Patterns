/// this class has aggragation relationship with strategy class
public class Shop{
     private Strategy strategy;
    public Shop(Strategy strategy){
        this.strategy=strategy;
    }
     public int getBill(int num1){
      return strategy.getBill(num1);
   }
}
