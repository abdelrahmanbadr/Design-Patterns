package iterator

type ConcreateContainer struct {
	Items []string
}

func (c *ConcreateContainer) GetIterator() Iterator {
	return &ConcreateIterator{Container: c}
}
func (c *ConcreateContainer) AddItem(s string) {
	c.Items = append(c.Items, s)
}
