 @component('components.master')
     @slot('content')
         @verbatim
         <div class="page-body" id="app">
              <div class="container-fluid">
                <div class="page-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Contacts</h3>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                            <svg class="stroke-icon">
                              <use :href="asset('/assets/svg/icon-sprite.svg#stroke-home')"></use>
                            </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Contacts</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Container-fluid starts-->
              <div class="container-fluid">
                <div class="email-wrap bookmark-wrap">
                  <div class="row main-bookmark">
                    <div class="col-xxl-3 box-col-6">
                      <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">contact filter</a>
                        <div class="md-sidebar-aside job-left-aside">
                          <div class="email-left-aside">
                            <div class="card">
                              <div class="card-body custom-scrollbar">
                                <div class="email-app-sidebar left-bookmark">
                                  <div class="common-flex align-items-center">
                                    <div class="d-flex-size-email"><img class="rounded-circle" :src="asset('/assets/images/user/user.png')" alt=""></div>
                                    <div class="flex-grow-1">
                                      <h6>WILLIAM C. JENNINGS</h6>
                                      <p>william@jourrapide.com</p>
                                    </div>
                                  </div>
                                  <ul class="nav main-menu contact-options" role="tablist">
                                    <li class="nav-item">
                                      <button class="button-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-2" data-feather="users"></i> New Contacts</button>
                                    </li>
                                    <li class="nav-item">
                                      <button class="button-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="me-2" data-feather="plus"></i> Add Category</button>
                                      <ul>
                                        <li class="nav-item"><span class="main-title"><i class="icofont icofont-filter"></i> Filter By</span></li>
                                        <li><a class="active" id="pills-personal-tab" data-bs-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true"><span class="title"> Personal</span></a></li>
                                        <li><a id="pills-organization-tab" data-bs-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false"><span class="title"> Organization</span></a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-9 col-md-12 box-col-12">
                      <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                        <div class="card email-body radius-left dark-contact">
                          <div class="ps-0">
                            <div class="tab-content">
                              <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                                <div class="card mb-0">
                                  <div class="card-header d-flex">
                                    <h5>Personal</h5><span class="f-14 pull-right mt-0">5 Contacts</span>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="row list-persons g-3" id="addcon">
                                      <div class="col-xl-4 xl-50 col-md-5">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="contact-tab-0 nav-link active" id="v-pills-org-user-tab" data-bs-toggle="pill" onclick="activeDiv(0)" href="#v-pills-org-user" role="tab" aria-selected="true">
                                            <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" :src="asset('/assets/images/user/2.png')" alt="">
                                              <div class="flex-grow-1">
                                                <h6> <span class="first_name_0">Joshua </span><span class="last_name_0">Barnes</span></h6>
                                                <p class="email_add_0">barnes@gmail.com</p>
                                              </div>
                                            </div></a><a class="contact-tab-1 nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" onclick="activeDiv(1)" href="#v-pills-profile" role="tab" aria-selected="false">
                                            </a>
                                            </div>
                                      </div>
                                      <div class="col-xl-8 xl-50 col-md-7">
                                        <div class="tab-content" id="v-pills-tabContent">
                                          <div class="tab-pane contact-tab-0 tab-content-child fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                                            <div class="profile-mail">
                                              <div class="d-flex"><img class="img-100 img-fluid m-r-20 rounded-circle update_img_0" :src="asset('/assets/images/user/2.png')" alt="">
                                                <input class="updateimg" type="file" name="img" onchange="readURL(this,0)" accept="image/*">
                                                <div class="flex-grow-1 mt-0">
                                                  <h5><span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h5>
                                                  <p class="email_add_0">barnes@gmail.com</p>
                                                  <ul class="main-contact-option">
                                                    <li><a href="#" onclick="editContact(0)">Edit</a></li>
                                                    <li><a href="#" onclick="deleteContact(0)">Delete</a></li>
                                                    <li><a href="#" onclick="history(0)">History</a></li>
                                                    <li><a href="#" onclick="printContact(0)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
                                                  </ul>
                                                </div>
                                              </div>
                                              <div class="email-general">
                                                <h6 class="mb-3">General</h6>
                                                <ul>
                                                  <li> <span>Name</span><span class="font-primary first_name_0">Bucky</span></li>
                                                  <li> <span>Gender</span><span class="font-primary">Male</span></li>
                                                  <li> <span>Birthday</span><span class="font-primary"> <span class="birth_day_0">18</span><span class="birth_month_0 ms-1">May</span><span class="birth_year_0 ms-1">1994</span></span></li>
                                                  <li> <span>Personality</span><span class="font-primary personality_0">Cool</span></li>
                                                  <li> <span>City</span><span class="font-primary city_0">moline acres</span></li>
                                                  <li> <span>Mobile No</span><span class="font-primary mobile_num_0">+0 1800 76855</span></li>
                                                  <li> <span>Email Address</span><span class="font-primary email_add_0">barnes@gmail.com </span></li>
                                                  <li> <span>Website</span><span class="font-primary url_add_0">www.pixelstrap.com</span></li>
                                                  <li> <span>Interest</span><span class="font-primary interest_0">Photography</span></li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="contact-editform ps-0">
                                          <form class="custom-input">
                                            <div class="row g-3">
                                              <div class="mt-0 mb-3 col-md-12">
                                                <label>Nombre</label>
                                                <div class="row g-3">
                                                  <div class="col-xxl-6">
                                                    <input class="form-control" id="first_name1" type="text" required="" placeholder="First Name" value="first_name1">
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <input class="form-control" id="last_name1" type="text" required="" placeholder="Last Name" value="last_name1">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mt-0 mb-3 col-md-12">
                                                <label>Email Address</label>
                                                <input class="form-control" id="email_add1" type="text" required="" autocomplete="off">
                                              </div>
                                              <div class="mt-0 mb-3 col-md-12">
                                                <label>Phone</label>
                                                <div class="row g-3">
                                                  <div class="col-xxl-6">
                                                    <input class="form-control" id="mobile_num1" type="number" required="" autocomplete="off">
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <select class="form-control">
                                                      <option>Mobile</option>
                                                      <option>Work</option>
                                                      <option>Others</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row more-data">
                                              <div class="mt-0 mb-3 col-md-12">
                                                <label>URLS</label>
                                                <div class="row g-3">
                                                  <div class="col-xxl-6 xl-100">
                                                    <input class="form-control" id="url_add1" type="url" required="">
                                                  </div>
                                                  <div class="col-xxl-6 xl-100">
                                                    <select class="selectpicker search-picker" aria-label="Group" data-live-search="true">
                                                      <option value="1" selected>Personal Web Address</option>
                                                      <option value="2">Company Web Address</option>
                                                      <option value="3">Facebook URL</option>
                                                      <option value="4">Twitter URL</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mt-0 mb-3 col-md-12">
                                                <label>Personal</label>
                                                <div class="d-block">
                                                  <label class="me-3" for="edo-ani2">
                                                    <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani1" checked=""><span>Male</span>
                                                  </label>
                                                  <label for="edo-ani3">
                                                    <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1"><span>Female</span>
                                                  </label>
                                                </div>
                                              </div>

                                              <div class="mt-0 mb-3 col-md-12">
                                                <div class="row g-3">
                                                  <div class="col-xxl-6">
                                                    <label>Personality</label>
                                                    <input class="form-control" id="personality1" type="text" required="" autocomplete="off">
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <label>Interest</label>
                                                    <input class="form-control" id="interest1" type="text" required="" autocomplete="off">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mb-3 col-md-12">
                                                <label>Home Address</label>
                                                <div class="row g-3">
                                                  <div class="col-12">
                                                    <div class="mb-2">
                                                      <input class="form-control" type="text" placeholder="Address">
                                                    </div>
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <div class="mb-2">
                                                      <input class="form-control" id="city" type="text" placeholder="City">
                                                    </div>
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <div class="mb-2">
                                                      <input class="form-control" type="text" placeholder="State">
                                                    </div>
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <div>
                                                      <input class="form-control" type="text" placeholder="Country">
                                                    </div>
                                                  </div>
                                                  <div class="col-xxl-6">
                                                    <div>
                                                      <input class="form-control" type="text" placeholder="Postal code">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div><a class="ps-0 edit-information" href="#">Edit more information</a>
                                            <button class="btn btn-primary update-contact me-2" type="button">Save</button>
                                            <button class="btn button-light-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="right-history">
                                <div class="modal-header p-20">
                                  <h6 class="modal-title w-100 common-space">Contact History<span class="pull-right"><a class="closehistory" href="#"><i class="icofont icofont-close"></i></a></span></h6>
                                </div>
                                <div class="history-details">
                                  <div class="text-center"><i class="icofont icofont-ui-edit"></i>
                                    <p>Contact has not been modified yet.</p>
                                  </div>
                                  <div class="d-flex"><i class="icofont icofont-star"></i>
                                    <div class="flex-grow-1 mt-0">
                                      <h6 class="mt-0">Contact Created</h6>
                                      <p class="mb-0">Contact is created via mail</p><span class="f-12 c-light">Sep 10, 2025 4:00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal fade modal-bookmark" id="printModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Print Preview</h5>
                                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body list-persons">
                                      <div class="profile-mail pt-0" id="DivIdToPrint">
                                        <div class="common-flex align-items-center"><img class="img-fluid rounded-circle" id="updateimg" src="asset('/assets/images/user/2.png')" alt="">
                                          <div class="flex-grow-1 mt-0">
                                            <h5><span id="printname">Bucky</span><span id="printlast">Barnes</span></h5>
                                            <p id="printmail">barnes@gmail.com</p>
                                          </div>
                                        </div>
                                        <div class="email-general">
                                          <h6>General</h6>
                                          <p>Email Address: <span class="font-primary" id="mailadd">barnes@gmail.com   </span></p>
                                        </div>
                                      </div>
                                      <button class="btn btn-primary" id="btnPrint" type="button" onclick="printDiv();">Print</button>
                                      <button class="btn button-light-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>


         @endverbatim
     @endslot
     @slot('script')
         <script>
             const {
                 createApp
             } = Vue;
             createApp({
                 data() {
                     return {
                         clientes: [],
                         documentos: [],
                         model: {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         },
                         actualizar: false,
                         buscar: '',
                     }
                 },
                 computed: {},
                 methods: {
                    asset(path) {
                        return "{{asset('/')}}/"+path;
                    },
                     url(url) {
                         return "{{ url('') }}" + url;
                     },
                     async obtenerCliente() {
                         const respuesta = await axios.get("{{ url('/') }}" + '/api/clientes');
                         this.clientes = respuesta.data;
                     },
                     async get_data(path) {
                         const respuesta = await axios.get("{{ url('/') }}" + '/api/' + path);
                         return respuesta.data
                     },
                     async guardarCliente() {
                         let respuesta = await axios.post("{{ url('/') }}" + '/api/clientes', this.model);
                         await this.obtenerCliente();
                         Swal.fire({
                             position: "top-end",
                             icon: "success",
                             title: "Tu trabajo ha sido guardado",
                             showConfirmButton: false,
                             timer: 1000
                         });
                         this.model = {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         };
                     },
                     seleccionarCliente(cliente) {
                         this.model = cliente;
                         this.actualizar = true;
                         this.mostrarSiderbar = true;
                     },
                     async actualizarCliente() {
                         let respuesta = await axios.put("{{ url('/') }}" + '/api/clientes/' + this.model.id,
                             this.model);
                         await this.obtenerCliente();
                         Swal.fire({
                             position: "top-end",
                             icon: "success",
                             title: "Tu trabajo ha sido Actualizo",
                             showConfirmButton: false,
                             timer: 1000
                         });
                         this.model = {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         };

                     },
                     async eliminarCliente(id) {
                         const swalWithBootstrapButtons = Swal.mixin({
                             customClass: {
                                 confirmButton: "btn btn-success",
                                 cancelButton: "btn btn-danger"
                             },
                             buttonsStyling: false
                         });
                         swalWithBootstrapButtons.fire({
                             title: "Estas seguro?",
                             text: "¡No podrás revertir esto!",
                             icon: "warning",
                             showCancelButton: true,
                             confirmButtonText: "Sí, ¡eliminalo!",
                             cancelButtonText: "No, cancelalo!",
                             reverseButtons: true
                         }).then(async (result) => {
                             if (result.isConfirmed) {
                                 //EL ELIMINAR FUNCIONARA POR ESTO
                                 let respuesta = await axios.delete("{{ url('/') }}" +
                                     '/api/clientes/' + id);
                                 await this.obtenerCliente();
                                 //-------------------------------------//
                                 swalWithBootstrapButtons.fire({
                                     title: "Eliminado!",
                                     text: "Su cliente ha sido eliminado",
                                     icon: "success",
                                     //que se cierre dentro de 1 segundo
                                     timer: 1000
                                 });
                             }
                         });
                     }
                 },
                 mounted() {
                    console.log('Vue montado correctamente');
                     this.$nextTick(async function() {
                         await this.obtenerCliente();
                         //para obtener las tablas
                         await Promise.all([
                             this.get_data('documentos')
                         ]).then((values) => {
                             this.documentos = values[0];
                         })
                     });
                 },
             }).mount('#app');
         </script>
     @endslot
 @endcomponent
