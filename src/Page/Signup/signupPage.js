import './signupPage.css';
import React from 'react';
import Footer from '../../Component/Footer/footerComponent';
import Header2 from '../../Component/Header2/header2Component';

class Signupage extends React.Component {
    render() {
      return (
        <React.StrictMode>
        <Header2 />
        
        <div className = "signupage1">
            <div className = "container">
                <div className = "row">
                    <div className = "col-sm-6">
                        <h1>Hi There!</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed
                        </p>
                        <div className = "form-floating mb-3">
                            <input type="text" className="form-control" id="floatingInput" placeholder="Ahmad Aljaelani"></input>
                            <label for="floatingInput">Name</label>
                        </div>
                        <div className = "form-floating mb-3">
                            <input type="text" className="form-control" id="floatingInput" placeholder="1214441222"></input>
                            <label for="floatingInput">Student Id</label>
                        </div>
                        <div className = "form-floating mb-3">
                            <input type="email" className="form-control" id="floatingInput" placeholder="name@example.com"></input>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div className = "form-floating">
                            <input type="password" className="form-control" id="floatingPassword" placeholder="Password"></input>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button className = "btn btn-primary">Register</button>
                        <p className = "register">Already Have an Account ? <span>Log In</span></p>

                    </div>

                    <div className = "col-sm-6 gambar2">
                        <img src = "https://github.com/Bagasarfiansyah007/intership-RPLGDC-planpoker/blob/Front-end---Bagas/SAVE_20210814_164052.png?raw=true"></img>
                    </div>
                </div>
            </div>
        </div>
        
        <Footer />
        </React.StrictMode>
      );
    }
  }
  
  export default Signupage;