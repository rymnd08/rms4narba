@include('partials.header')
@include('partials.member.wrapper')
    
    
    <x-page-header header="Rabbit Profiles" />

    @if (session()->has('message'))
        <x-popup :type="session('type')" :message="session('message')" />
    @endif

    <x-table>
        <x-slot:cardHeader>
            <a href="{{ route('rabbit-profile.create') }}" class="btn btn-primary btn-sm add-btn"><i class="bi bi-plus-lg"></i> Add </a>
        </x-slot:cardHeader>
        <x-slot:tableHeaders>
            <th>#</th>
            <th>Rabbit Code</th>
            <th>Rabbit Name</th>
            <th>Cage #</th>
            <th>Sex</th>
            <th>Image</th>
            <th>Actions</th>
        </x-slot:tableHeaders>
        <x-slot:tableData>
            @foreach ($rabbitProfiles as $rp)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{ $rp->rabbit_code }}</td>
                    <td>{{ $rp->rabbit_name }}</td>
                    <td>{{ $rp->cage_number }}</td>
                    <td>{{ $rp->sex }}</td>
                    <td>
                        <img class="rounded-circle border" style="object-fit: cover;" src="{{$rp->image ? asset("storage/rabbit_image/$rp->image") : asset('img/rabbit_default.jpg') }}" alt="Rabbit Profile Image" height="50" width="50">
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap" style="gap: .25rem">
                            <a href="{{ route('rabbit-profile.show', ['id' => $rp->id]) }}" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('rabbit-profile.edit', ['id' => $rp->id])}}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil"></i></a>

                            <x-delete-modal title="Confirm Delete" body="Are you sure you want to delete this rabbit?">
                                <form action="{{ route('rabbit-profile.destroy', ['id' => $rp->id, 'img' => $rp->image ]) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </x-delete-modal>

                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot:tableData>
    </x-table>


   
@include('partials.endwrapper')
@include('partials.footer')