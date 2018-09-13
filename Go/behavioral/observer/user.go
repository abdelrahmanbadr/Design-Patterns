package observer

type User struct{}

func (u *User) Update(subj ISubject) {
	subj.GetInfo()
	/// do business logic with this info
}
