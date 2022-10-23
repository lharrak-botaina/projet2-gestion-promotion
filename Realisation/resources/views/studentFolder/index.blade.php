
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Student</h2>
                    <a href="{{route("student.create")}}">ajouter</a>
                    <table >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>firstName</th>
                                <th>lastName</th>
                                <th>Email</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td> <a href="{{ route("student.edit",$student->id) }}">edit</a></td>
                                <td>

                                    <form action="{{ route("student.destroy",$student->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
</div>


