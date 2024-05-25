import { useEffect, useState } from 'react';
import reactLogo from './assets/react.svg';
import viteLogo from '/vite.svg';
import './App.scss';
import Homepage from './Pages/Homepage/Homepage';
import { Flip, ToastContainer } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import { Routes, Route, Navigate, useNavigate, useLocation, NavLink } from 'react-router-dom';
import Jobspage from './Pages/Jobspage/Jobspage';
import { FaBars } from 'react-icons/fa';

function App() {






  return (
    <div className="App">
      <ToastContainer position='bottom-right' autoClose={3000} transition={Flip} hideProgressBar={false} />
      <nav className='navbar' id='navbar'>
        <div className="nav-wrap">

          <div className="nav-wrap-left">
            <h1>कुर्मि नियोक्ता संघ</h1>
          </div>
          <div className="nav-wrap-right">
            <ul className='nav-menu'>
              <li>
                <NavLink
                  to="/home"
                  className={({ isActive, isPending }) =>
                    isPending ? "pending" : isActive ? "active" : ""
                  }
                >
                  होम
                </NavLink>
              </li>
              <li>
                <NavLink
                  to="/jobs"
                  className={({ isActive, isPending }) =>
                    isPending ? "pending" : isActive ? "active" : ""
                  }
                >

                  नौकरी
                </NavLink>
              </li>
              <li>
                <NavLink
                  to="/about"
                  className={({ isActive, isPending }) =>
                    isPending ? "pending" : isActive ? "active" : ""
                  }
                >
                  बारे में
                </NavLink>
              </li>
            </ul>
            <button className='menu-btn'><FaBars/></button>
          </div>
        </div>
      </nav>
      <Routes >
        <Route key={"homesd"} path={'/'} element={<Homepage />} />
        <Route key={"about"} path={'/about'} element={<h1>About</h1>} />
        <Route key={"jobs"} path={'/jobs'} element={<Jobspage/>} />
        <Route key={"all"} path='*' element={<Homepage />} />
      </Routes>

      
    </div>
  )
}

export default App
