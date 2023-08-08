@include('layouts.header')


<section class="py-5 gray-bg">

    <div class="container">
       <div class="row">
            <div class="central-meta">
                <div class="d-flex justify-content-between border-bottom border-bottom-1 pb-3">
                    <h5 class="text-orange mb-0">DETAILS</h5>
                    <form action="" class="search-voter-list">
                        <input type="search" name="search" placeholder="Type in search" value="">&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success mx-2">Search</button>
                    </form>

                </div>
                <div class="table-responsive">
                <table class="overview table table-striped">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name :</th>
                                <th>Location :</th>
                                <th>Country :</th>
                                <th>Rate :</th>
                                <th>Price :</th>
                                <th>Email :</th>
                                <th>Message :</th>
                                <th colspan="2">Action</th>
                         
                            </tr>
                        </thead>
                        <tbody>
                     
                        @foreach ($data as $list) 
                           <tr>
                            <td>{{$list->id}} </td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->location}}</td>
                            <td>{{$list->country}}</td>
                            <td>{{$list->rate}}</td>
                            <td>{{$list->price}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->message}}</td>
                            <td>
                                <a href=" {{ url('./edit/?id='.$list->id) }}" id="edit"><button>Edit</button></a></td>
                            </tr>
                       @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-between media_list-pagination">
                </div>
            </div>
        </div>
    </div>

</section>
@include('layouts.footer')