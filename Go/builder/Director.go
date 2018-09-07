package builder


type Director struct {
	vehicle VehicleBuilder
}
func (self *Director) Construct() {
	self.vehicle.SetSeats().SetStructure().SetWheels().TopSpeed()
}

func (self *Director) Build(b VehicleBuilder) Vehicle{
	self.vehicle = b
	self.Construct()
	return b.Build()
}