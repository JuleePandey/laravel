@include('layouts.header')


<section class="py-5 gray-bg">

    <div class="container">
       <div class="row">
            <div class="central-meta">
                <div class="d-flex justify-content-between border-bottom border-bottom-1 pb-3">
                    <h5 class="text-orange mb-0"> LIST</h5>
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
                               <th>Project Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Rate</th>
                                <th>Price Type</th>
                                <th>Required</th>
                                <th>Invoice&nbsp;Time</th>
                                <th>Priority </th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                        @foreach ($data as $list) 
                           <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->project_name}}</td>
                            <td>{{$list->start_date}}</td>
                            <td>{{$list->end_date}}</td>
                            <td>{{$list->rate}}</td>
                            <td>{{$list->price_type}}</td>
                            <td>{{$list->required}}</td>
                            <td>{{$list->invoice_time}}</td>
                            <td>{{$list->priority}}</td>
                            <td>{{$list->message}}</td>
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