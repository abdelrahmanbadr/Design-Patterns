package builder
type CarBuilder struct {
	v Vehicle
}

func (c *CarBuilder) SetWheels() VehicleBuilder {
	c.v.Wheels = 4
	return c
}

func (c *CarBuilder) SetSeats() VehicleBuilder {
	c.v.Seats = 5
	return c
}

func (b *CarBuilder) TopSpeed() VehicleBuilder {
	b.v.TopSpeed = 160
	return b
}

func (c *CarBuilder) SetStructure() VehicleBuilder {
	c.v.Structure = "Car"
	return c
}

func (c *CarBuilder) Build() Vehicle {
	return c.v
}









