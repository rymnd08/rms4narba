@include('partials.header')
@include('partials.wrapper')
    
    
    <x-page-header>
        Rabbit Profiles
    </x-page-header>

    @if (session('status'))
        <div class="alert {{session('alert')}} alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    <x-table>
        <x-slot:cardHeader>
            <a href="{{ url("/member/rabbit-profile/create") }}" class="btn btn-primary btn-sm add-btn"><i class="bi bi-plus-lg"></i> Add </a>
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
                        <img class="rounded-circle" src="{{$rp->rabbit_image}}" alt="Rabbit Profile Image" height="50" width="50">
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap" style="gap: .25rem">
                            <a href="{{ url('member/rabbit-profile', ['id' => $rp->rabbit_id]) }}" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{ url('member/rabbit-profile/edit', ['id' => $rp->rabbit_id]) }}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil"></i></a>

                            <x-delete-modal>
                                <x-slot:title>Delete rabbit</x-slot:title>
                                <x-slot:form>
                                    <!-- deleting the rabbit  -->
                                    <form action="{{ route('rabbit-profile.destroy', ['id' => $rp->rabbit_id]) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger">Yes</button>
                                    </form>
                                </x-slot:form>
                            </x-delete-modal>

                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot:tableData>
    </x-table>


   
@include('partials.endwrapper')
@include('partials.footer')