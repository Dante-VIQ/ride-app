<form action="{{ route('users.make-admin', $user) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Make Admin</button>
</form>