
    <div class="container">
        <h1>Financial Goals</h1>

        <a href="{{ route('financial-goals.create') }}" class="btn btn-primary mb-3">Create New Goal</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Current Value</th>
                    <th>Target Value</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>User ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($financialGoals as $goal)
                    <tr>
                        <td>{{ $goal->id }}</td>
                        <td>{{ $goal->name }}</td>
                        <td>{{ $goal->type->name }}</td> <!-- Assuming 'type' relation is defined -->
                        <td>{{ $goal->current_value }}</td>
                        <td>{{ $goal->target_value }}</td>
                        <td>{{ $goal->status->name }}</td> <!-- Assuming 'status' relation is defined -->
                        <td>{{ $goal->start_date}}</td>
                        <td>{{ $goal->end_date}}</td>
                        <td>{{ $goal->user_id }}</td>
                        <td>
                            <a href="{{ route('financial-goals.edit', $goal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('financial-goals.destroy', $goal->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>