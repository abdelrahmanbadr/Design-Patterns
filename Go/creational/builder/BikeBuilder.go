package builder
//A Builder of type motorbike
type BikeBuilder struct {
	v Vehicle
}

func (b *BikeBuilder) SetWheels() VehicleBuilder {
	b.v.Wheels = 2
	return b
}

func (b *BikeBuilder) SetSeats() VehicleBuilder {
	b.v.Seats = 2
	return b
}
func (b *BikeBuilder) TopSpeed() VehicleBuilder {
	b.v.TopSpeed = 180
	return b
}

func (b *BikeBuilder) SetStructure() VehicleBuilder {
	b.v.Structure = "Motorbike"
	return b
}

func (b *BikeBuilder) Build() Vehicle {
	return b.v
}

