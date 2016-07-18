import React from 'react';
import ReactDOM from 'react-dom';
import CommentBox from './components/CommentBox';


ReactDOM.render(
  <CommentBox url="/api/comments" pollInterval={4000} />,
  document.getElementById('content')
);
