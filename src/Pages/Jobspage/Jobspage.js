import React from 'react';
import './jobspage.scss';
import underline from "../../assets/Images/underline.png";

const Jobspage = () => {
    return (
        <div className='jobspage'>
            <div className="jobspage-wrap">
                <div className="jobs-header">
                    <div className="jobs-header-wrap">
                        <div className="overlay">
                            <h1>कुर्मी समाज के लिए सुनहरे रोजगार के अवसर</h1>
                            <h3>आज ही अपने करियर की नई ऊँचाइयों को छूएं</h3>
                        </div>
                    </div>
                </div>

                <div className="jobs-display-section">
                    <div className="jb-ds-wrap">

                        <div className="jobs-title">
                            <h1>अपनी पसंदीदा नौकरी खोजें</h1>
                            <img src={underline} alt="underline" />
                            <h3>सपनों की मंज़िल पाने के लिए यहाँ से शुरुआत करें</h3>
                        </div>


                        <div className="filter-group">

                        </div>


                        <div className="table-container">
                            <div className="table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>कार्य शीर्षक</th>
                                            <th>सेवाये</th>
                                            <th>आवश्यकताएं</th>
                                            <th>अपेक्षित वेतन</th>
                                            <th>कार्रवाई</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    )
}

export default Jobspage