package builder


//A Builder of type Bus
type BusBuilder struct {
	v Vehicle
}

func (b *BusBuilder) SetWheels() VehicleBuilder {
	b.v.Wheels = 8
	return b
}
func (c *BusBuilder) SetSeats() VehicleBuilder {
	c.v.Seats = 52
	return c
}

func (b *BusBuilder) TopSpeed() VehicleBuilder {
	b.v.TopSpeed = 90
	return b
}

func (b *BusBuilder) SetStructure() VehicleBuilder {
	b.v.Structure = "Bus"
	return b
}

func (b *BusBuilder) Build() Vehicle {
	return b.v
}


