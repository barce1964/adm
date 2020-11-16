import React from 'react';

const Spinner = ({active}) => {
    return (
        <div className={active ? 'spinner active' : 'spinner'}>
            <span class="uk-margin-small-right" uk-spinner="ratio: 3"></span>
        </div>
    )
}

export default Spinner;