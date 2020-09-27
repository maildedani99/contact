import React from 'react';
import styles from './chatview.module.css';
import DbTest from '../../components/dbtest/dbtest';



const ChatView = () => {


    return(
        <div className={styles.__container}>
                <div className={styles.__chat_div}>
                    
                       <DbTest />
                </div>
        </div>
    )
}
export default ChatView;