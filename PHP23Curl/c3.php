<?php
$ch = curl_init("https://media-exp1.licdn.com/dms/image/C4D03AQFK-qcKxldS9A/profile-displayphoto-shrink_200_200/0?e=1594252800&v=beta&t=MlgbiENXUGLFUSfnHHYH9M7JU5g7C-UccemSjJT-RaI");
$filename = fopen("image1.jpg","w");
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);