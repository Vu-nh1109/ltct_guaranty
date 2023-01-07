<html><head><title></title></head><body>
    <div class="container">
        <h3>View all petition</h3><hr>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">order_id</th>
            <th scope="col">reason</th>
            <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petitionData as $data)
            <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->order_id}}</td>
            <td>{{$data->reason}}<td>
            <td>
                <img src="{{ url('Image/'.$data->image1) }}"
    style="height: 100px; width: 150px;">
            </td>
            @if($data->image2)
            <td>
                <img src="{{ url('Image/'.$data->image2) }}"
    style="height: 100px; width: 150px;">
            </td>
            @endif
            @if($data->image3)
            <td>
                <img src="{{ url('Image/'.$data->image3) }}"
    style="height: 100px; width: 150px;">
            </td>
            @endif
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
