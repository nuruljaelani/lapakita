@extends('layouts.layout')

@section('title')
    Sub Category
@endsection

@section('content')
    <section class="section" x-data="subcategory">
        <!-- Button trigger for large size modal -->
        <button type="button" class="btn icon icon-left btn-sm btn-outline-primary" data-bs-toggle="modal"
            data-bs-target="#modal-insert">
            <i data-feather="plus"></i> Tambah Sub Kategori
        </button>
        <x-modal title="Insert Sub Category" modalId="modal-insert">
            <form id="formInsert">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-4">
                                <label class="col-form-label">Category</label>
                            </div>
                            <div class="col-lg-10 col-8">
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect" x-model="i.category">
                                        <option selected>-- Pilih Kategori --</option>
                                        @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-4">
                                <label class="col-form-label">Sub Category</label>
                            </div>
                            <div class="col-lg-10 col-8">
                                <input type="text" class="form-control" x-model="i.name" placeholder="Sub Category">
                                <span class="text-danger" x-text="error"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" id="btnClose">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="button" class="btn btn-primary ml-1" id="btnSubmit" @click="post">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </x-modal>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <x-modal title="Edit Sub Category" modalId="modal-edit">
                <form id="formEdit">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-4">
                                    <label class="col-form-label">Sub Category</label>
                                </div>
                                <div class="col-lg-10 col-8">
                                    <input type="hidden" class="form-control" x-model="e.id" placeholder="Category">
                                    <input type="text" class="form-control" x-model="e.name" placeholder="Category">
                                    <span class="text-danger" x-text="error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"
                                    id="btnClose">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-primary ml-1" id="btnSubmit" @click="update">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </x-modal>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ secure_asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        let table = $('#table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/backsite/subcategory/datatable',
            columns: [{
                    name: 'id',
                    data: 'DT_RowIndex'
                },
                {
                    name: 'name',
                    data: 'name'
                },
                {
                    name: 'name',
                    data: 'category.name'
                },
                {
                    name: 'action',
                    data: 'action'
                }
            ]
        });


        let error = document.getElementById("error-name")
        let csrf_token = document.querySelector("input[name='_token']").value
        const modalInsert = document.getElementById('modal-insert')
        const modalEdit = document.getElementById('modal-edit')
        const myForm = document.getElementById('formInsert')

        document.addEventListener('alpine:init', () => {
            Alpine.data('subcategory', () => ({
                error: '',
                id: '',
                i: {
                    category: '',
                    name: ''
                },
                e: {
                    name: '',
                    id: ''
                },
                post() {
                    let url = '/backsite/subcategory/store'
                    const data = {
                        category: this.i.category,
                        name: this.i.name
                    }

                    postData(url, data)
                        .then((res) => {
                            if (res.errors) {
                                this.error = res.message
                            }

                            if (res.success) {
                                this.success(modalInsert, res.data)
                            }

                            table.draw()

                        })
                        .catch((err) => {
                            console.log(err)
                        })
                },

                edit() {
                    const modal = bootstrap.Modal.getOrCreateInstance(modalEdit)
                    modal.show()
                    let url = `/backsite/subcategory/${this.id}/edit`
                    getDataById(url)
                        .then((res) => {
                            if (res.success) {
                                this.e.id = res.data.id
                                this.e.name = res.data.name
                            }
                        })
                        .catch((err) => {
                            console.log(err)
                        })
                },

                update() {
                    let url = `/backsite/subcategory/update/${this.e.id}`
                    const data = {
                        name: this.e.name
                    }
                    updateData(url, data)
                        .then((res) => {
                            if (res.errors) {
                                this.error = res.message
                            }

                            if (res.success) {
                                this.success(modalEdit, res.data)
                            }

                            table.draw()
                        })
                        .catch(err => console.log(err))
                },

                deleteData() {
                    let url = `/backsite/subcategory/delete/${this.id}`

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.deleteAction(url)

                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }

                        table.draw()
                    })
                },

                deleteAction(url) {
                    removeData(url)
                        .then((res) => {
                            if (res.errors) {
                                this.error = res.message
                            }
                        })
                        .catch((err) => {
                            console.log(err)
                        })
                },

                success(modalId, title) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: title,
                        showConfirmButton: false,
                        timer: 1500
                    })

                    const modal = bootstrap.Modal.getInstance(modalId)
                    modal.hide()
                    myForm.reset()
                    this.error = ''
                }
            }))
        })
    </script>
@endsection
