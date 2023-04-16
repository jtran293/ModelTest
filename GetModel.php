<?php
// URL of the GLB file to fetch
//$url = 'https://firebasestorage.googleapis.com/v0/b/test2-repo.appspot.com/o/UpperLimb%2FUL_Label.glb?alt=media&token=4605d9ce-ccf6-42b8-841d-ce52886bd4c8';
$url = 'https://raw.githubusercontent.com/jtran293/ModelTest/main/LabelTest.glb';

//$url = 'https://olrc2.scholarsportal.info/dataverse/10.5683/SP3/BGVIEU/186f127e60b-e988afe851fe?response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Forearm_2.63_LowPoly.glb&response-content-type=application%2Foctet-stream&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230415T112235Z&X-Amz-SignedHeaders=host&X-Amz-Expires=7200&X-Amz-Credential=33b141c798354e21a3394e9e4f546bbe%2F20230415%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=dcdb7264e0956353879018b7154c805b4588801b518a9b2fa4bbcf20c6f4ff6b';

// Fetch the GLB file and encode the binary data as base64
$data = base64_encode(file_get_contents($url));

// Return the base64-encoded data
echo $data;
?>