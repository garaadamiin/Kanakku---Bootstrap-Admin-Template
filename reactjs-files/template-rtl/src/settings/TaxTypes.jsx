import React, {useState, useEffect} from 'react';
import { Link } from 'react-router-dom';
import SettingSidebar from '../layouts/SettingsSidebar'
import Select2 from 'react-select2-wrapper';
import Header from '../layouts/Header'
import Sidebar from '../layouts/Sidebar'

const TaxTypes = () => {
   
    const [menu, setMenu] = useState(false)

	const toggleMobileMenu = () => {
		setMenu(!menu)
	  }
	const [status, setstatus ] = useState( [
        { id: 1, text: 'Active' },
        { id: 2, text: 'Inactive' },
    	]);


    const formHandler = (e) => {
        console.log(e);
    }

    useEffect(() => {
		let elements = Array.from(document.getElementsByClassName('select2-container'));
        elements.map(element => element.classList.add("width-100"))
	},[]);

        return (

            <div className={`main-wrapper ${menu ? 'slide-nav': ''}`}> 
          
			    <Header onMenuClick={(value) => toggleMobileMenu()} />
			    <Sidebar /> 
                
                <div className="page-wrapper">
                    <div className="content container-fluid">
                    
                        <div className="page-header">
                            <div className="row">
                                <div className="col-sm-6">
                                    <h3 className="page-title">Settings</h3>
                                    <ul className="breadcrumb">
                                        <li className="breadcrumb-item"><Link to="/index">Dashboard</Link>
                                        </li>
                                        <li className="breadcrumb-item active">Tax Types</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div className="row">
                            <div className="col-xl-3 col-md-4">
                                <SettingSidebar />
                            </div>
                            
                            <div className="col-xl-9 col-md-8">
                                <div className="card card-table">
                                    <div className="card-header">
                                        <div className="row">
                                            <div className="col">
                                                <h5 className="card-title">Tax Types</h5>
                                            </div>
                                            <div className="col-auto">
                                                <a href="#" className="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_tax">Add New Tax</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card-body">
                                        <div className="table-responsive">
                                            <table className="table table-hover mb-0">
                                                <thead className="thead-light">
                                                    <tr>
                                                        <th>Tax Name </th>
                                                        <th>Tax Percentage (%) </th>
                                                        <th>Status</th>
                                                        <th className="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>VAT</td>
                                                        <td>14%</td>
                                                        <td>
                                                            <span className="badge bg-success-light">Active</span>
                                                        </td>
                                                        <td className="text-end">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" className="btn btn-sm btn-white text-success ms-2"><i className="far fa-edit ms-1"></i> Edit</a> 
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" className="btn btn-sm btn-white text-danger ms-2"><i className="far fa-trash-alt ms-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>GST</td>
                                                        <td>30%</td>
                                                        <td>
                                                            <span className="badge bg-danger-light">Inactive</span>
                                                        </td>
                                                        <td className="text-end">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" className="btn btn-sm btn-white text-success ms-2"><i className="far fa-edit ms-1"></i> Edit</a> 
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" className="btn btn-sm btn-white text-danger ms-2"><i className="far fa-trash-alt ms-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="add_tax" className="modal custom-modal fade" role="dialog">
                            <div className="modal-dialog modal-dialog-centered" role="document">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h5 className="modal-title">Add Tax</h5>
                                        <button type="button" className="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div className="modal-body">
                                        <form>
                                            <div className="form-group">
                                                <label>Tax Name <span className="text-danger">*</span></label>
                                                <input className="form-control" type="text"  onChange={formHandler}/>
                                            </div>
                                            <div className="form-group">
                                                <label>Tax Percentage (%) <span className="text-danger">*</span></label>
                                                <input className="form-control" type="text" onChange={formHandler} />
                                            </div>
                                            <div className="form-group">
                                                <label>Status <span className="text-danger">*</span></label>
                                                <Select2
                                                    defaultValue={1}
                                                    className="w-100"
                                                    data={status}
                                                    options={{
                                                        placeholder: 'Select Status',
                                                    }}
                                                />
                                            </div>
                                            <div className="submit-section">
                                                <button className="btn btn-primary submit-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="edit_tax" className="modal custom-modal fade" role="dialog">
                            <div className="modal-dialog modal-dialog-centered" role="document">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h5 className="modal-title">Edit Tax</h5>
                                        <button type="button" className="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div className="modal-body">
                                        <form>
                                            <div className="form-group">
                                                <label>Tax Name <span className="text-danger">*</span></label>
                                                <input className="form-control" value="VAT" type="text" onChange={formHandler} />
                                            </div>
                                            <div className="form-group">
                                                <label>Tax Percentage (%)  <span className="text-danger">*</span></label>
                                                <input className="form-control" value="14%" type="text" onChange={formHandler} />
                                            </div>
                                            <div className="form-group">
                                                <label>Status <span className="text-danger">*</span></label>
                                                <Select2
                                                    defaultValue={1}
                                                    className="w-100 select"
                                                    data={status}
                                                    options={{
                                                        placeholder: 'Select Status',
                                                    }}
                                                />
                                            </div>
                                            <div className="submit-section">
                                                <button className="btn btn-primary submit-btn">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div className="modal custom-modal fade" id="delete_tax" role="dialog">
                            <div className="modal-dialog modal-dialog-centered">
                                <div className="modal-content">
                                    <div className="modal-body">
                                        <div className="modal-icon text-center mb-3">
                                            <i className="fas fa-trash-alt text-danger"></i>
                                        </div>
                                        <div className="modal-text text-center">
                                            <h2>Delete Tax</h2>
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                    </div>
                                    <div className="modal-footer text-center">
                                        <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" className="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             </div>                                       
        );
    
}
export default TaxTypes;