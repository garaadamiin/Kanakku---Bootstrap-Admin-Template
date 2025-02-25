import React, {useEffect, useState} from 'react';
import { Link } from 'react-router-dom';
import SettingSidebar from '../layouts/SettingsSidebar'
import Header from '../layouts/Header'
import Sidebar from '../layouts/Sidebar'

const ChangePassword = () => {

    const [menu, setMenu] = useState(false)

	const toggleMobileMenu = () => {
		setMenu(!menu)
	  }
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
                                        <li className="breadcrumb-item active">Change Password</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div className="row">
                            <div className="col-xl-3 col-md-4">
                                <SettingSidebar />    
                            </div>
                            
                            <div className="col-xl-9 col-md-8">
    
                                <div className="card">
                                    <div className="card-header">
                                        <h5 className="card-title">Change Password</h5>
                                    </div>
                                    <div className="card-body">
                                    
                                        <form>
                                            <div className="row form-group">
                                                <label  className="col-sm-3 col-form-label input-label">Current Password</label>
                                                <div className="col-sm-9">
                                                    <input type="password" className="form-control" autoComplete="off" id="current_password" placeholder="Enter current password" />
                                                </div>
                                            </div>
                                            <div className="row form-group">
                                                <label  className="col-sm-3 col-form-label input-label">New Password</label>
                                                <div className="col-sm-9">
                                                    <input type="password" className="form-control" autoComplete="off" id="new_password" placeholder="Enter new password" />
                                                    <div className="progress progress-md mt-2">
                                                        <div className="progress-bar bg-danger" role="progressbar" style={{width: '2%'}} aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="row form-group">
                                                <label className="col-sm-3 col-form-label input-label">Confirm new password</label>
                                                <div className="col-sm-9">
                                                    <div className="mb-3">
                                                        <input type="password" className="form-control" autoComplete="off" id="confirm_password" placeholder="Confirm your new password" />
                                                    </div>
    
                                                    <h5>Password requirements:</h5>
                                                    <p className="mb-2">Ensure that these requirements are met:</p>
                                                    <ul className="list-unstyled small">
                                                        <li>Minimum 8 characters long - the more, the better</li>
                                                        <li>At least one lowercase character</li>
                                                        <li>At least one uppercase character</li>
                                                        <li>At least one number, symbol</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div className="text-end">
                                                <button type="submit" className="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        );
    
}
export default ChangePassword;