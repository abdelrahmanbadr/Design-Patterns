package iterator

// or Aggregate
type Container interface {
	GetIterator() Iterator
}
