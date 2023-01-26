@extends('back.layouts.main')

@section('title')
    <div class="d-sm-flex align-items-center justify-content-between mg-lg-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">lantana</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Proyectos</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Proyectos</h4>
        </div>
    </div>
@endsection

@section('content')
    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Información General</h4>
                        <hr>
                        <input type="hidden" name="is_promotional" value="0">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="title">Título <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="link">Prioridad
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Se refiere al posicionamiento que tendrá este elemento en la página web. Prioridad 1 se muestra siempre primero y prioridad 7 siempre al último. Si existen dos elementos con prioridades iguales tomará prevalencia el elemento creado más recientemente."><i
                                            class="fas fa-info-circle"></i></span>
                                </label>
                                <select class="form-control" name="priority" required>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="subtitle">Subtítulo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ old('subtitle') }}" required="" />
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea name="body" class="form-control" rows="5" id="project-body"></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="text_button">Texto en el botón <span class="text-info">(Opcional)</span></label>
                                <input type="text" class="form-control" id="text_button" name="text_button"
                                    value="{{ old('text_button') }}" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="link">URL del botón <span class="text-info">(Opcional)</span></label>
                                <input type="url" class="form-control" id="link" name="link"
                                    value="{{ old('link') }}" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Fondo</h4>
                        <hr>

                        <div id="imageType" class="row">
                            <div class="form-group col-md-12">
                                <label for="image">Imagen de banner <span class="text-danger">*</span></label>
                                <input type="file" id="image" class="form-control" name="image"
                                    onchange="loadFile(event)" required="" />

                            </div>
                        </div>


                        {{-- 
                    <h4>Vista Previa</h4>
                    <hr>
                    <div class="d-flex">
                        <div class="card-banner d-flex justify-content-center align-items-center" id="hex_">
                            <div class="card-banner-content">
                                <h5 id="title_">Título</h5>
                                <p id="subtitle_">Subtítulo</p>
                                <a href="#" class="btn btn-light rounded" id="text_button_">Texto del botón</a>
                            </div>
                            <img class="card-banner-image" id="output"/>
                        </div>
                    </div>
                    --}}
                    </div>
                </div>

                <div class="text-right mt-4 mb-5">
                    <a href="{{ route('banners.index') }}" class="btn btn-default btn-lg">Cancelar</a>
                    <button type="submit" class="btn btn-primary btn-lg">Guardar Nuevo Banner</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        class MyUploadAdapter {
            // ...
            constructor(loader) {
                // The file loader instance to use during the upload. It sounds scary but do not
                // worry — the loader will be passed into the adapter later on in this guide.
                this.loader = loader;
            }

            // Starts the upload process.
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            // Aborts the upload process.
            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            // Initializes the XMLHttpRequest object using the URL passed to the constructor.
            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();

                // Note that your request may look different. It is up to you and your editor
                // integration to choose the right communication channel. This example uses
                // a POST request with JSON as a data structure but your configuration
                // could be different.
                xhr.open('POST', '{{ route('projects.images.store') }}', true);
                xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                xhr.responseType = 'json';
            }

            // Initializes XMLHttpRequest listeners.
            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    // This example assumes the XHR server's "response" object will come with
                    // an "error" which has its own "message" that can be passed to reject()
                    // in the upload promise.
                    //
                    // Your integration may handle upload errors in a different way so make sure
                    // it is done properly. The reject() function must be called when the upload fails.
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    // If the upload is successful, resolve the upload promise with an object containing
                    // at least the "default" URL, pointing to the image on the server.
                    // This URL will be used to display the image in the content. Learn more in the
                    // UploadAdapter#upload documentation.
                    resolve({
                        default: response.url
                    });
                });

                // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                // properties which are used e.g. to display the upload progress bar in the editor
                // user interface.
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            // Prepares the data and sends the request.
            _sendRequest(file) {
                // Prepare the form data.
                const data = new FormData();

                data.append('upload', file);

                // Important note: This is the right place to implement security mechanisms
                // like authentication and CSRF protection. For instance, you can use
                // XMLHttpRequest.setRequestHeader() to set the request headers containing
                // the CSRF token generated earlier by your application.

                // Send the request.
                this.xhr.send(data);
            }

            // ...
        }

        function SimpleUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                // Configure the URL to the upload script in your back-end here!
                return new MyUploadAdapter(loader);
            };
        }


        ClassicEditor
            .create(document.querySelector('#project-body'), {
                extraPlugins: [SimpleUploadAdapterPlugin],

                // ...
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
