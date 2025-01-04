<template>
<!-- Buttons -->
						<section class="comp-section comp-buttons">
							<div class="section-header">
                                <h3 class="section-title">Buttons</h3>
                                <div class="line"></div>
                            </div>
							<div class="card bg-white">
								<div class="card-body">
									<h5 class="card-title">Default Button</h5>
									<button type="button" class="btn btn-primary">Primary</button>
									<button type="button" class="btn btn-secondary ms-1">Secondary</button>
									<button type="button" class="btn btn-success ms-1">Success</button>
									<button type="button" class="btn btn-danger ms-1">Danger</button>
									<button type="button" class="btn btn-warning ms-1">Warning</button>
									<button type="button" class="btn btn-info ms-1">Info</button>
									<button type="button" class="btn btn-light ms-1">Light</button>
									<button type="button" class="btn btn-dark ms-1">Dark</button>
									<button type="button" class="btn btn-link ms-1">Link</button>
									<hr>
									<h5 class="card-title">Button Sizes</h5>
									<p>
										<button type="button" class="btn btn-primary btn-lg">Primary</button>
										<button type="button" class="btn btn-secondary btn-lg ms-1">Secondary</button>
										<button type="button" class="btn btn-success btn-lg ms-1">Success</button>
										<button type="button" class="btn btn-danger btn-lg ms-1">Danger</button>
										<button type="button" class="btn btn-warning btn-lg ms-1">Warning</button>
										<button type="button" class="btn btn-info btn-lg ms-1">Info</button>
										<button type="button" class="btn btn-light btn-lg ms-1">Light</button>
										<button type="button" class="btn btn-dark btn-lg ms-1">Dark</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button" class="btn btn-secondary ms-1">Secondary</button>
										<button type="button" class="btn btn-success ms-1">Success</button>
										<button type="button" class="btn btn-danger ms-1">Danger</button>
										<button type="button" class="btn btn-warning ms-1">Warning</button>
										<button type="button" class="btn btn-info ms-1">Info</button>
										<button type="button" class="btn btn-light ms-1">Light</button>
										<button type="button" class="btn btn-dark ms-1">Dark</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary btn-sm">Primary</button>
										<button type="button" class="btn btn-secondary btn-sm ms-1">Secondary</button>
										<button type="button" class="btn btn-success btn-sm ms-1">Success</button>
										<button type="button" class="btn btn-danger btn-sm ms-1">Danger</button>
										<button type="button" class="btn btn-warning btn-sm ms-1">Warning</button>
										<button type="button" class="btn btn-info btn-sm ms-1">Info</button>
										<button type="button" class="btn btn-light btn-sm ms-1">Light</button>
										<button type="button" class="btn btn-dark btn-sm ms-1">Dark</button>
									</p>
									<hr>
									<h5 class="card-title">Button Groups</h5>
									<div class="btn-toolbar">
										<div class="btn-group btn-group-lg">
											<button type="button" class="btn btn-primary">Left</button>
											<button type="button" class="btn btn-primary">Middle</button>
											<button type="button" class="btn btn-primary">Right</button>
										</div>
									</div>
									<br>
									<div class="btn-toolbar">
										<div class="btn-group">
											<button type="button" class="btn btn-primary">Left</button>
											<button type="button" class="btn btn-primary">Middle</button>
											<button type="button" class="btn btn-primary">Right</button>
										</div>
									</div>
									<br>
									<div class="btn-toolbar">
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-primary">Left</button>
											<button type="button" class="btn btn-primary">Middle</button>
											<button type="button" class="btn btn-primary">Right</button>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Rounded Button -->
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Rounded Button</h5>
									<p class="card-text">use <code>.btn-rounded</code> in class <code>.btn</code> class to get Rounded button</p>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-rounded btn-primary">Primary</button>
									<button type="button" class="btn btn-rounded btn-secondary ms-1">Secondary</button>
									<button type="button" class="btn btn-rounded btn-success ms-1">Success</button>
									<button type="button" class="btn btn-rounded btn-danger ms-1">Danger</button>
									<button type="button" class="btn btn-rounded btn-warning ms-1">Warning</button>
									<button type="button" class="btn btn-rounded btn-info ms-1">Info</button>
									<button type="button" class="btn btn-rounded btn-light ms-1">Light</button>
									<button type="button" class="btn btn-rounded btn-dark ms-1">Dark</button>
									<hr>
									<p>use <code>.btn-rounded</code> in class <code>.btn-outline-*</code> class to get Rounded Outline button</p>
									<button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
									<button type="button" class="btn btn-rounded btn-outline-secondary ms-1">Secondary</button>
									<button type="button" class="btn btn-rounded btn-outline-success ms-1">Success</button>
									<button type="button" class="btn btn-rounded btn-outline-danger ms-1">Danger</button>
									<button type="button" class="btn btn-rounded btn-outline-warning ms-1">Warning</button>
									<button type="button" class="btn btn-rounded btn-outline-info ms-1">Info</button>
									<button type="button" class="btn btn-rounded btn-outline-light ms-1">Light</button>
									<button type="button" class="btn btn-rounded btn-outline-dark ms-1">Dark</button>
								</div>
							</div>
							<!-- /Rounded Button -->
							
							<!-- Outline Buttons -->
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Outline Buttons</h5>
									<p class="card-text">Use <code>.btn-outline-*</code> class for outline buttons.</p>
								</div>
								<div class="card-body">
									<div class="row row-sm align-items-center">
										<div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-primary">Primary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-success">Success</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-warning">Warning</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-danger">Danger</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-info">Info</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-light">Light</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-dark">Dark</button>
										</div>
									</div>
									<div class="row row-sm align-items-center mt-3">
										<div class="col-12 col-xl mb-3 mb-xl-0">Active</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-primary active">Primary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-secondary active">Secondary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-success active">Success</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-warning active">Warning</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-danger active">Danger</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-info active">Info</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-light active">Light</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button type="button" class="btn btn-block btn-outline-dark active">Dark</button>
										</div>
									</div>
									<div class="row row-sm align-items-center mt-3">
										<div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-primary">Primary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-success">Success</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-warning">Warning</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-danger">Danger</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-info">Info</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-light">Light</button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
											<button disabled="" type="button" class="btn btn-block btn-outline-dark">Dark</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Outline Buttons -->

							<!-- Progress Button -->
							<div class="card mb-4">
								<div class="card-header">
									<h5 class="card-title">Progress Button</h5>
								</div>
								<div class="card-body bg-white">
									<button type="button" class="btn btn-primary"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Primary</button>
									<button type="button" class="btn btn-secondary ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Secondary</button>
									<button type="button" class="btn btn-success ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Success</button>
									<button type="button" class="btn btn-danger ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Danger</button>
									<button type="button" class="btn btn-warning ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Warning</button>
									<button type="button" class="btn btn-info ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Info</button>
									<button type="button" class="btn btn-dark ms-1"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Dark</button>
								</div>
							</div>
							<!-- /Progress Button -->
						</section>
						<!-- Buttons -->
</template>