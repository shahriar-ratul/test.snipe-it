<?php

return array(

    'undeployable' 		=> '<strong>Анхааруулга: </strong> Энэ хөрөнгө нь одоогоор хүчингүй болсон гэж тэмдэглэгдсэн байна. Хэрэв энэ байдал өөрчлөгдсөн бол хөрөнгийн статусыг шинэчлэнэ үү.',
    'does_not_exist' 	=> 'Хөрөнгө байхгүй байна.',
    'does_not_exist_or_not_requestable' => 'Сайхан оролдлого. Энэ хөрөнгө байхгүй эсвэл хүсэлт гаргаагүй.',
    'assoc_users'	 	=> 'Энэ хөрөнгийг одоогоор хэрэглэгчид шалгаж, устгах боломжгүй байна. Эхлээд хөрөнгийг шалгаж үзээд дараа нь устга.',

    'create' => array(
        'error'   		=> 'Акт үүсгээгүй байна, дахин оролдоно уу. :(',
        'success' 		=> 'Хөрөнгө амжилттай болсон. :)'
    ),

    'update' => array(
        'error'   			=> 'Хөрөнгийн шинэчлэлт хийгдээгүй тул дахин оролдоно уу',
        'success' 			=> 'Акт амжилттай шинэчлэгдсэн.',
        'nothing_updated'	=>  'Ямар ч талбар сонгогдоогүй тул шинэчлэгдээгүй байна.',
    ),

    'restore' => array(
        'error'   		=> 'Хөрөнгө сэргээгээгүй байна, дахин оролдоно уу',
        'success' 		=> 'Хөрөнгийн амжилттай сэргээгдэв.'
    ),

    'audit' => array(
        'error'   		=> 'Хөрөнгийн аудит амжилтгүй болсон. Дахин оролдоно уу.',
        'success' 		=> 'Хөрөнгийн аудит амжилттай нэвтэрсэн байна.'
    ),


    'deletefile' => array(
        'error'   => 'Файлыг устгаагүй байна. Дахин оролдоно уу.',
        'success' => 'Файл амжилттай устгагдсан.',
    ),

    'upload' => array(
        'error'   => 'Файлд байршуулаагүй файл. Дахин оролдоно уу.',
        'success' => 'Файлууд амжилттай байршуулсан.',
        'nofiles' => 'Та байршуулах ямар ч файл сонгоогүй, эсвэл байршуулах гэж буй файл хэт том байна',
        'invalidfiles' => 'Таны файлуудын нэг юмуу хэд нь хэтэрхий том юмуу эсвэл файлын төрлийг зөвшөөрдөггүй. Зөвшөөрөгдсөн filetypes нь png, gif, jpg, doc, docx, pdf, болон txt байна.',
    ),

    'import' => array(
        'error'                 => 'Зарим зүйлс зөв импорт хийгдээгүй байна.',
        'errorDetail'           => 'Дараах зүйлсийг алдааны улмаас импортолсонгүй.',
        'success'               => "Таны файл импортлогдсон байна",
        'file_delete_success'   => "Таны файл амжилттай болсон байна",
        'file_delete_error'      => "Файл устгагдах боломжгүй байна",
    ),


    'delete' => array(
        'confirm'   	=> 'Та энэ хөрөнгийг устгахыг хүсч байна уу?',
        'error'   		=> 'Хөрөнгийг устгах асуудал гарлаа. Дахин оролдоно уу.',
        'nothing_updated'   => 'Ямар ч хөрөнгө сонгогдоогүй тул юу ч устгаагүй.',
        'success' 		=> 'Хөрөнгийг амжилттай устгасан байна.'
    ),

    'checkout' => array(
        'error'   		=> 'Хөрөнгийг шалгаагүй байна, дахин оролдоно уу',
        'success' 		=> 'Акт амжилттай шалгасан.',
        'user_does_not_exist' => 'Энэ хэрэглэгч буруу байна. Дахин оролдоно уу.',
        'not_available' => 'Энэ хөрөнгийг татаж авахад бэлэн биш байна!',
        'no_assets_selected' => 'Жагсаалтаас доод тал нь нэг хөрөнгийг сонгоно уу'
    ),

    'checkin' => array(
        'error'   		=> 'Хөрөнгө оруулаагүй байна, дахин оролдоно уу',
        'success' 		=> 'Хөрөнгө амжилттай шалгагдсан.',
        'user_does_not_exist' => 'Энэ хэрэглэгч буруу байна. Дахин оролдоно уу.',
        'already_checked_in'  => 'Энэ аккаунтыг аль хэдийн шалгасан байна.',

    ),

    'requests' => array(
        'error'   		=> 'Акт хүсээгүй тул дахин оролдоно уу',
        'success' 		=> 'Хөрөнгө амжилттай ирэв.',
        'canceled'      => 'Тооцоо хийх хүсэлт амжилттай цуцлагдсан'
    )

);