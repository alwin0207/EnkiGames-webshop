@extends ('layouts.admin')

@section ('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Leeftijdscategoriën</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Leeftijdscategorie</th>
                    <th></th>
                    <th>Delete</th>
                    <tbody class="table table-hover">

                    @foreach ($age_categories as $age_category)
                        <tr>
                            <td><a href="{{ route('age_categories.show', $age_categories) }}" style="text-decoration: none"> {{ $age_category->description }}</a></td>
{{--
                            <td><a href="{{ route('age_categories.edit', $age_categories) }}"><i class="fas fa-edit" style="margin-top:10px"></i></a></td> --}}
                            <td></td>
                            <td><form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit" style="margin-left:-10px"><i class="fas fa-trash-alt" style="color:red"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </thead>
            </table>
        </div>
                    <br>
     <div class="footer" style="margin-left: 35px">
        <a href="{{ route('admin') }}" style="text-decoration: none">
        <i class="fas fa-arrow-left"></i> Terug naar admin</a>
        <br>
        <br>
</tbody>

@endsection


