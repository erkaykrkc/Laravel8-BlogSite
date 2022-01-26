@extends('layouts.admin')

@section('title','Ayarları Düzenle')

@section('javascript')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">

  <div class="row col-lg-4">
      @include('home.message')
  </div>

  <div class="row">
      <div class="col-12 col-sm-12">
          <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="card card-primary card-tabs">
                      <div class="card-header p-0 pt-1">
                          <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill"
                                     href="#custom-tabs-one-general" role="tab"
                                     aria-controls="custom-tabs-one-general"
                                     aria-selected="true"><b>General</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill"
                                     href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp"
                                     aria-selected="false"><b>Smtp Email</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill"
                                     href="#custom-tabs-one-social" role="tab"
                                     aria-controls="custom-tabs-one-social"
                                     aria-selected="false"><b>Social Media</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill"
                                     href="#custom-tabs-one-aboutus" role="tab"
                                     aria-controls="custom-tabs-one-aboutus"
                                     aria-selected="false"><b>About Us</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill"
                                     href="#custom-tabs-one-contact" role="tab"
                                     aria-controls="custom-tabs-one-contact"
                                     aria-selected="false"><b>Contact Page</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill"
                                     href="#custom-tabs-one-references" role="tab"
                                     aria-controls="custom-tabs-one-references"
                                     aria-selected="false"><b>References</b></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-mainpage-tab" data-toggle="pill"
                                   href="#custom-tabs-one-mainpage" role="tab"
                                   aria-controls="custom-tabs-one-mainpage"
                                   aria-selected="false"><b>Main Page</b></a>
                              </li>
                          </ul>
                      </div>
                      <div class="card-body">
                          <div class="tab-content" id="custom-tabs-one-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-general-tab">
                                  <input type="hidden" id="id" name="id" value="{{$data->id}}"
                                         class="form-control">
                                  <div class="form-group">
                                      <label><b>Title</b></label>
                                      <input type="text" name="title" value="{{$data->title}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Keywords</b></label>
                                      <input type="text" name="keywords" value="{{$data->keywords}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Description</b></label>
                                      <input type="text" name="description" value="{{$data->description}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Company</b></label>
                                      <input type="text" name="company" value="{{$data->company}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Address</b></label>
                                      <input type="text" name="address" value="{{$data->address}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Phone</b></label>
                                      <input type="number" name="phone" value="{{$data->phone}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Fax</b></label>
                                      <input type="number" name="fax" value="{{$data->fax}}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Email</b></label>
                                      <input type="text" name="email" value="{{$data->email}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Status</b></label>
                                      <select class="form-control select2" name="status" style="width: 100%;">
                                          <option selected="selected">{{$data->status}}</option>
                                          <option>True</option>
                                          <option>False</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="tab-pane fade " id="custom-tabs-one-smtp" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-smtp-tab">
                                  <div class="form-group">
                                      <label><b>Smtp Server</b></label>
                                      <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Smtp Email</b></label>
                                      <input type="text" name="smtpemail" value="{{$data->smtpemail}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Smtp Pasword</b></label>
                                      <input type="password" name="smtppasword" value="{{$data->smtppasword}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Smtp Port</b></label>
                                      <input type="number" name="smtpport" value="{{$data->smtpport}}"
                                             class="form-control">
                                  </div>
                              </div>

                              <div class="tab-pane fade " id="custom-tabs-one-social" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-social-tab">
                                  <div class="form-group">
                                      <label><b>Facebook</b></label>
                                      <input type="text" name="facebook" value="{{$data->facebook}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Instagram</b></label>
                                      <input type="text" name="instagram" value="{{$data->instagram}}"
                                             class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label><b>Twitter</b></label>
                                      <input type="text" name="twitter" value="{{$data->twitter}}"
                                             class="form-control">
                                  </div>
                              </div>

                              <div class="tab-pane fade " id="custom-tabs-one-aboutus" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-aboutus-tab">
                                  <div class="form-group">
                                      <label><b>About Us</b></label>
                                      <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                  </div>
                              </div>

                              <div class="tab-pane fade " id="custom-tabs-one-contact" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-contact-tab">
                                  <div class="form-group">
                                      <label><b>Contact</b></label>
                                      <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                  </div>
                              </div>

                              <div class="tab-pane fade " id="custom-tabs-one-references" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-contact-tab">
                                  <div class="form-group">
                                      <label><b>References</b></label>
                                      <textarea id="references" name="references">{{$data->references}}</textarea>
                                  </div>
                              </div>
                              <div class="tab-pane fade " id="custom-tabs-one-mainpage" role="tabpanel"
                                   aria-labelledby="custom-tabs-one-contact-tab">
                                  <div class="form-group">
                                      <label><b>Main Page</b></label>
                                      <textarea id="mainpage" name="mainpage">{{$data->mainpage}}</textarea>
                                  </div>
                              </div>

                              <script>
                                  CKEDITOR.replace('aboutus');
                                  CKEDITOR.replace('contact');
                                  CKEDITOR.replace('references');
                                  CKEDITOR.replace('mainpage');
                              </script>

                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary" style="margin-left:20px;margin-bottom: 10px">Update Setting</button>
                  </div>

              </div>

          </form>
      </div>
  </div>
</div>
</div>
@endsection