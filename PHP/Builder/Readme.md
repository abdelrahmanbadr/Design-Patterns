The Builder class specifies an abstract interface for creating parts of a Product object. (VehicleBuilder Interface)

The ConcreteBuilder constructs and puts together parts of the product by implementing the Builder interface.  (TruckBuilder and CarBuilder classes)

The Product represents the complex object that is being built. (Vehicle class)

The Director class constructs the complex object using the Builder interface. (Director Class)

