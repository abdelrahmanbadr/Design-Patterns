package iterator

type ConcreateIterator struct {
	Container    *ConcreateContainer
	currentIndex int
}

func (c *ConcreateIterator) HasNext() bool {
	if c.currentIndex < len(c.Container.Items) {
		return true
	}
	return false
}

func (c *ConcreateIterator) Next() interface{} {
	if c.HasNext() != true {
		return nil
	}
	defer func() {
		c.currentIndex++
	}()
	return c.Container.Items[c.currentIndex]
}
