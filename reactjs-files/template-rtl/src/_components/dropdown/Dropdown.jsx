import React from 'react';

const Dropdown = () => {
  
  return ( 

     <>   
      {/* Dropdowns */}
      <section className="comp-section comp-dropdowns">
        <div className="section-header">
            <h3 className="section-title">Dropdowns</h3>
            <div className="line" />
        </div>
        <div className="card bg-white">
            <div className="card-body">
            <h5 className="card-title">Dropdowns within Text</h5>
            <div className="dropdown">
                <a
                className="dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                {" "}
                Dropdown{" "}
                </a>
                <div className="dropdown-menu">
                <a className="dropdown-item" href="#">
                    Action
                </a>
                <a className="dropdown-item" href="#">
                    Another action
                </a>
                </div>
            </div>
            <hr />
            <h5 className="card-title">Dropdowns within Buttons</h5>
            <div className="btn-group">
            <button type="button" className="btn btn-primary dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-secondary dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-info dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-success dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-warning dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-danger dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <hr />
            <h5 className="card-title">Split button dropdowns</h5>
            <div className="btn-group">
            <button type="button" className="btn btn-primary me-1">Action</button>
            <button type="button" className="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-secondary me-1">Action</button>
            <button type="button" className="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-info me-1">Action</button>
            <button type="button" className="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-success me-1">Action</button>
            <button type="button" className="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-warning me-1">Action</button>
            <button type="button" className="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            <div className="btn-group">
            <button type="button" className="btn btn-danger me-1">Action</button>
            <button type="button" className="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span className="sr-only">Toggle Dropdown</span>
            </button>
            <div className="dropdown-menu">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider" />
                <a className="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
        </div>
    </div>
    </section>
    {/* /Dropdowns */}
   </>
  )
}

export default Dropdown