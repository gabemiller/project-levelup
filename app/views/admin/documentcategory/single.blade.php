<tr>
    <td class="text-center">{{Form::input('checkbox','delete',$document->id,array('data-url'=> URL::route('admin.dokumentum.destroy',array('id'=>$document->id))))}}</td>
    <td>{{$docCategory->id}}</td>
    <td>{{$docCategory->parent}}</td>
    <td>{{$docCategory->name}}</td>
    <td>{{$docCategory->created_at}}</td>
    <td class="text-center">{{HTML::decode(HTML::linkRoute('admin.dokumentumcategory.edit','<i class="fa fa-edit"></i> Módosítás',array('id'=>$docCategory->id),array('class'=>'btn btn-sm btn-default')))}}</td>
</tr>