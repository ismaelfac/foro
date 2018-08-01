
                        {!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}

                            {!! Field::text('title') !!}

                            {!! Field::textarea('content') !!}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        publicar
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
