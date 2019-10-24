@extends('layouts.app')

@section('title','Dashboard')
@section('content')

    <div class="container" style="margin-top: 200px;">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div align="right">
                <button type="button" class="m-1 btn btn-success right" id="daterange-btn">
													<span>
														<i class="fa fa-calendar"></i>Export
													</span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <a class="btn btn-danger m-1 right" href="{{url('logout')}}">Logout</a>


                <form id="dateForm" action="{{url('export')}}">
                    <input type="hidden" name="start" id="startDate">
                    <input type="hidden" name="end" id="endDate">
                </form>


            </div>
            <table class="table table-hover">
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Politically Inclined</th>
                    <th>Highest Education</th>
                    <th>Wish</th>
                </tr>
                <?php $count = 0; ?>
                @foreach($members as $member)

                    <tr>
                        <td>
                            {{$from + $count}}
                        </td>
                        <td>
                            {{$member->name}}
                        </td>
                        <td>
                            {{$member->email}}
                        </td>
                        <td>
                            {{$member->phone}}
                        </td>
                        <td>
                            {{$member->address}}
                        </td>

                        <td>
                            {{$member->politically_inclined}}
                        </td>
                        <td>
                            {{$member->highest_education}}
                        </td>
                        <td>
                            {{$member->wish}}
                        </td>

                    </tr>
                @endforeach
            </table>
            {{$members->links()}}
        </div>
    </div>
</div>



@endsection
