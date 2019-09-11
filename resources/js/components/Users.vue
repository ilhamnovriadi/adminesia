<template>
    <div>
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manajemen Akun</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-success" @click="newModal"><i class="fas fa-user-plus"></i> Add New</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td><span class="tag tag-success">User</span></td>
                      <td>
                          <a href="#" @click="editModal(user)" class="text-blue"><i class="fas fa-edit"></i> Edit</a> | 
                          <a href="#" @click="deleteUser(user.id)" class="text-red"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        </section>
        <div class="modal fade" id="addNew">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 v-show="!editmode" class="modal-title">Create New User</h4>
                    <h4 v-show="editmode" class="modal-title">Update User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form @submit.prevent="editmode? updateUser() : createUser()" >
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Name</label>
                        <input v-model="form.name" type="text" name="name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                        <input v-model="form.email" type="text" name="email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input v-model="form.password" type="password" name="password"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                    <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
              editmode :true,
              users:{},
              form: new Form({
                id:'',
                name: '',
                email: '',
                password: ''
            })
            }
        },
        methods: {
            updateUser(){
              this.$Progress.start();
              this.form.put('api/user/'+this.form.id).then(()=>{
                Fire.$emit('afterCreate');
                $('#addNew').modal('hide')
                Swal.fire(
                        'Updated!',
                        'User berhasil diupdate.',
                        'success'
                      )
                this.$Progress.finish();
              }).catch(()=>{
                 this.$Progress.fail();
              })
            },
            newModal(){
              this.form.reset();
              this.editmode = false;
               $('#addNew').modal('show');
            },
            editModal(user){
               this.form.reset();
               this.editmode = true;
               $('#addNew').modal('show');
               this.form.fill(user);
            },
            deleteUser(id){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.value) {
                    this.form.delete('api/user/'+id).then(()=>{
                      Fire.$emit('afterCreate');
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }).catch(()=>{
                      Swal.Fire("Failed !", "User gagal dihapus", "warning")
                    })
                  }
                }).catch(()=>{
                      Swal.Fire("Failed !", "User gagal dihapus", "warning")
                })
            },
            loadUsers(){
                this.$Progress.start();
                axios.get('api/user').then(({data})=>(this.users = data.data));
                this.$Progress.finish();
            },
            createUser(){
                this.$Progress.start();
                this.form.post('api/user')
                .then(()=>{
                  Fire.$emit('afterCreate');
                  $('#addNew').modal('hide')
                  Toast.fire({
                    type: 'success',
                    title: 'User baru berhasil dibuat'
                  })
                  this.$Progress.finish();
                })
                .catch(()=>{

                })
            }
        },
        created() {
            this.loadUsers();
            Fire.$on('afterCreate',()=>{
                this.loadUsers();
            });
        }
    }
</script>
