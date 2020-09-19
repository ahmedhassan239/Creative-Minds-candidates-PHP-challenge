@foreach($users as $row)
        <div class="modal fade" id="{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="/user/{{ $row->id }}">
                        @csrf
                        @if(Session::has('msg'))
                        <?php
                        $msg = array();
                        $msg = session()->pull('msg');
                        echo'
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            ' . $msg[1] . '!
                        </div>
                        ';
                        ?>
                        @endif
                        @if(count($errors) >0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit User</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 control-label">
                                            <label>Name:</label>
                                        </div>
                                        <div class="col-md-10 ">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="  fa fa-pencil-square-o"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right input-lg"  value="{{ $row->name }}" name="name"  placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 control-label">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="  fa fa-pencil-square-o"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right input-lg" value="{{ $row->email }}"  name="email"  placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 control-label">
                                            <label>Mobile</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-folder"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right input-lg"  value="{{ $row->mobile}}"  name="mobile"  placeholder="Meta-Data" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                           
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Update <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        </div>
      @endforeach