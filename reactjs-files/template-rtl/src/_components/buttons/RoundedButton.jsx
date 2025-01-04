import React from 'react';

const RoundedButton = () => {
  
  return (
   
   <>
     {/* Rounded Button */}
     <div className="card bg-white">
        <div className="card-header">
          <h5 className="card-title">Rounded Button</h5>
          <p className="card-text">
            use <code>.btn-rounded</code> in class <code>.btn</code> class to get
            Rounded button
          </p>
        </div>
        <div className="card-body">
          <button type="button" className="btn btn-rounded btn-primary ms-1">
            Primary
          </button>
          <button type="button" className="btn btn-rounded btn-secondary ms-1">
            Secondary
          </button>
          <button type="button" className="btn btn-rounded btn-success ms-1">
            Success
          </button>
          <button type="button" className="btn btn-rounded btn-danger ms-1">
            Danger
          </button>
          <button type="button" className="btn btn-rounded btn-warning ms-1">
            Warning
          </button>
          <button type="button" className="btn btn-rounded btn-info ms-1">
            Info
          </button>
          <button type="button" className="btn btn-rounded btn-light ms-1">
            Light
          </button>
          <button type="button" className="btn btn-rounded btn-dark ms-1">
            Dark
          </button>
          <hr />
          <p>
            use <code>.btn-rounded</code> in class <code>.btn-outline-*</code>{" "}
            class to get Rounded Outline button
          </p>
          <button type="button" className="btn btn-rounded btn-outline-primary ms-1">
            Primary
          </button>
          <button type="button" className="btn btn-rounded btn-outline-secondary ms-1">
            Secondary
          </button>
          <button type="button" className="btn btn-rounded btn-outline-success ms-1">
            Success
          </button>
          <button type="button" className="btn btn-rounded btn-outline-danger ms-1">
            Danger
          </button>
          <button type="button" className="btn btn-rounded btn-outline-warning ms-1">
            Warning
          </button>
          <button type="button" className="btn btn-rounded btn-outline-info ms-1">
            Info
          </button>
          <button type="button" className="btn btn-rounded btn-outline-light ms-1">
            Light
          </button>
          <button type="button" className="btn btn-rounded btn-outline-dark ms-1">
            Dark
          </button>
        </div>
      </div>
      {/* /Rounded Button */}
      
   </>
  )
}

export default RoundedButton