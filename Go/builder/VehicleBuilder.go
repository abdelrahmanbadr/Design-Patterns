package builder

//type VehicleBuilder interface {
//	TopSpeed(int) VehicleBuilder  //topSpeed setter
//	Paint(string) VehicleBuilder  //color setter
//	Build() VehicleBuilder //GetObject
//}
type VehicleBuilder interface {
	SetWheels() VehicleBuilder
	SetSeats() VehicleBuilder
	SetStructure() VehicleBuilder
	TopSpeed() VehicleBuilder
	Build() Vehicle
}