public class Discount implements Strategy{
public int   getBill (int totalPrice){
    return totalPrice- totalPrice*20 /100 ;
}
}