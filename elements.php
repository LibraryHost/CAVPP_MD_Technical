<?php
    $elementSetMetadata = array(
        'name'        => 'Technical Metadata',
        'description' => "CAVPP custom technical metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

/************** Physical Asset **********************/

		// Duration
		array(
            'label' => 'Physical Asset - Duration',
            'name'  => 'Physical Asset - Duration',
            /* 'description' => 'Physical Asset - Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Running Speed
		array(
            'label' => 'Physical Asset - Running Speed',
            'name'  => 'Physical Asset - Running Speed',
            /* 'description' => 'Physical Asset - Running Speed.', */
            'data_type'   => 'Tiny Text',
        ),

		// Timecode Content Begins
		array(
            'label' => 'Physical Asset - Timecode Content Begins',
            'name'  => 'Physical Asset - Timecode Content Begins',
            /* 'description' => 'Physical Asset - Timecode Content Begins.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Standard
		array(
            'label' => 'Physical Asset - Track Standard',
            'name'  => 'Physical Asset - Track Standard',
            /* 'description' => 'Physical Asset - Track Standard.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Physical Asset - Channel Configuration',
            'name'  => 'Physical Asset - Channel Configuration',
            /* 'description' => 'Physical Asset - Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Stock Manufacturer
		array(
            'label' => 'Physical Asset - Stock Manufacturer',
            'name'  => 'Physical Asset - Stock Manufacturer',
            /* 'description' => 'Physical Asset - Stock Manufacturer.', */
            'data_type'   => 'Tiny Text',
        ),

		// Base Type
		array(
            'label' => 'Physical Asset - Base Type',
            'name'  => 'Physical Asset - Base Type',
            /* 'description' => 'Physical Asset - Base Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Transcript
		array(
            'label' => 'Physical Asset - Transcript',
            'name'  => 'Physical Asset - Transcript',
            /* 'description' => 'Physical Asset - Transcript.', */
        ),
		
		// Moving Image Only Sources
		// Silent or Sound
		array(
            'label' => 'Physical Asset - Silent or Sound',
            'name'  => 'Physical Asset - Silent or Sound',
            /* 'description' => 'Physical Asset - Silent or Sound.', */
            'data_type'   => 'Tiny Text',
        ),

		// Color and/or Black and White
		array(
            'label' => 'Physical Asset - Color and/or Black and White',
            'name'  => 'Physical Asset - Color and/or Black and White',
            /* 'description' => 'Physical Asset - Color and/or Black and White.', */
            'data_type'   => 'Tiny Text',
        ),

		// Aspect Ratio
		array(
            'label' => 'Physical Asset - Aspect Ratio',
            'name'  => 'Physical Asset - Aspect Ratio',
            /* 'description' => 'Physical Asset - Aspect Ratio.', */
            'data_type'   => 'Tiny Text',
        ),

		// Subtitles
		array(
            'label' => 'Physical Asset - Subtitles',
            'name'  => 'Physical Asset - Subtitles',
            /* 'description' => 'Physical Asset - Subtitles.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Intertitles
		array(
            'label' => 'Physical Asset - Intertitles',
            'name'  => 'Physical Asset - Intertitles',
            /* 'description' => 'Physical Asset - Intertitles.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Closed Captions
		array(
            'label' => 'Physical Asset - Closed Captions',
            'name'  => 'Physical Asset - Closed Captions',
            /* 'description' => 'Physical Asset - Closed Captions.', */
            'data_type'   => 'Tiny Text',
        ),		

		// Vendor Technical Evaluation Report
		array(
            'label' => 'Physical Asset - Vendor Technical Evaluation Report',
            'name'  => 'Physical Asset - Vendor Technical Evaluation Report',
            /* 'description' => 'Physical Asset - Vendor Technical Evaluation Report.', */
            'data_type'   => 'Tiny Text',
        ),	
		
/************** Access Copy *********************/

		// Generation
		array(
            'label' => 'Access Copy - Generation',
            'name'  => 'Access Copy - Generation',
            /* 'description' => 'Access Copy - Generation.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Access Copy - Format',
            'name'  => 'Access Copy - Format',
            /* 'description' => 'Access Copy - Format.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Digital File Identifier(s)
		array(
            'label' => 'Access Copy - Digital File Identifier(s)',
            'name'  => 'Access Copy - Digital File Identifier(s)',
            /* 'description' => 'Access Copy - Digital File Identifier(s).', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// Creation Date
		array(
            'label' => 'Access Copy - Creation Date',
            'name'  => 'Access Copy - Creation Date',
            /* 'description' => 'Access Copy - Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),			
		
		// Frame Size
		array(
            'label' => 'Access Copy - Frame Size',
            'name'  => 'Access Copy - Frame Size',
            /* 'description' => 'Access Copy - Frame Size.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Extension
		array(
            'label' => 'Access Copy - File Extension',
            'name'  => 'Access Copy - File Extension',
            /* 'description' => 'Access Copy - File Extension.', */
            'data_type'   => 'Tiny Text',
        ),

		// Standard and File Wrapper
		array(
            'label' => 'Access Copy - Standard and File Wrapper',
            'name'  => 'Access Copy - Standard and File Wrapper',
            /* 'description' => 'Access Copy - Standard and File Wrapper.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Location
		array(
            'label' => 'Access Copy - File Location',
            'name'  => 'Access Copy - File Location',
            /* 'description' => 'Access Copy - File Location.', */
            'data_type'   => 'Tiny Text',
        ),

		// Media Type
		array(
            'label' => 'Access Copy - Media Type',
            'name'  => 'Access Copy - Media Type',
            /* 'description' => 'Access Copy - Media Type.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// File Size
		array(
            'label' => 'Access Copy - File Size',
            'name'  => 'Access Copy - File Size',
            /* 'description' => 'Access Copy - File Size.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Duration
		array(
            'label' => 'Access Copy - Duration',
            'name'  => 'Access Copy - Duration',
            /* 'description' => 'Access Copy - Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Colors
		array(
            'label' => 'Access Copy - Colors',
            'name'  => 'Access Copy - Colors',
            /* 'description' => 'Access Copy - Colors.', */
            'data_type'   => 'Tiny Text',
        ),

		// Tracks
		array(
            'label' => 'Access Copy - Tracks',
            'name'  => 'Access Copy - Tracks',
            /* 'description' => 'Access Copy - Tracks.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Access Copy - Channel Configuration',
            'name'  => 'Access Copy - Channel Configuration',
            /* 'description' => 'Access Copy - Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Type
		array(
            'label' => 'Access Copy - Track Type',
            'name'  => 'Access Copy - Track Type',
            /* 'description' => 'Access Copy - Track Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Encoder 
		array(
            'label' => 'Access Copy - Encoder',
            'name'  => 'Access Copy - Encoder',
            /* 'description' => 'Access Copy - Encoder.', */
            'data_type'   => 'Tiny Text',
        ),

		// Sampling Rate
		array(
            'label' => 'Access Copy - Sampling Rate',
            'name'  => 'Access Copy - Sampling Rate',
            /* 'description' => 'Access Copy - Sampling Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Frame Rate 
		array(
            'label' => 'Access Copy - Frame Rate',
            'name'  => 'Access Copy - Frame Rate',
            /* 'description' => 'Access Copy - Frame Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Bit Depth  
		array(
            'label' => 'Access Copy - Bit Depth',
            'name'  => 'Access Copy - Bit Depth',
            /* 'description' => 'Access Copy - Bit Depth.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Data Compression 
		array(
            'label' => 'Access Copy - Data Compression',
            'name'  => 'Access Copy - Data Compression',
            /* 'description' => 'Access Copy - Data Compression.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Derived From 
		array(
            'label' => 'Access Copy - Derived From',
            'name'  => 'Access Copy - Derived From',
            /* 'description' => 'Access Copy - Derived From.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Vendor 
		array(
            'label' => 'Access Copy - Vendor',
            'name'  => 'Access Copy - Vendor',
            /* 'description' => 'Access Copy - Vendor.', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// File Identifier 
		array(
            'label' => 'Access Copy - File Identifier',
            'name'  => 'Access Copy - File Identifier',
            /* 'description' => 'Access Copy - File Identifier.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// MD5 
		array(
            'label' => 'Access Copy - MD5',
            'name'  => 'Access Copy - MD5',
            /* 'description' => 'Access Copy - MD5.', */
            'data_type'   => 'Tiny Text',
        ),

		// MD5 Date
		array(
            'label' => 'Access Copy - MD5 Date',
            'name'  => 'Access Copy - MD5 Date',
            /* 'description' => 'Access Copy - MD5 Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Creating Application/Version 
		array(
            'label' => 'Access Copy - Creating Application/Version',
            'name'  => 'Access Copy - Creating Application/Version',
            /* 'description' => 'Access Copy - Creating Application/Version.', */
            'data_type'   => 'Tiny Text',
        ),

		// Digitizer Manufacturer/Model 
		array(
            'label' => 'Access Copy - Digitizer Manufacturer/Model',
            'name'  => 'Access Copy - Digitizer Manufacturer/Model',
            /* 'description' => 'Access Copy - Digitizer Manufacturer/Model.', */
            'data_type'   => 'Tiny Text',
        ),		
		
/************* Copy / Mezzanine Master *************/
		
		// Generation
		array(
            'label' => 'Copy/Mezzanine Master - Generation',
            'name'  => 'Copy/Mezzanine Master - Generation',
            /* 'description' => 'Copy/Mezzanine Master - Generation.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Copy/Mezzanine Master - Format',
            'name'  => 'Copy/Mezzanine Master - Format',
            /* 'description' => 'Copy/Mezzanine Master - Format.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Digital File Identifier(s)
		array(
            'label' => 'Copy/Mezzanine Master - Digital File Identifier(s)',
            'name'  => 'Copy/Mezzanine Master - Digital File Identifier(s)',
            /* 'description' => 'Copy/Mezzanine Master - Digital File Identifier(s).', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// Creation Date
		array(
            'label' => 'Copy/Mezzanine Master - Creation Date',
            'name'  => 'Copy/Mezzanine Master - Creation Date',
            /* 'description' => 'Copy/Mezzanine Master - Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),			
		
		// Frame Size
		array(
            'label' => 'Copy/Mezzanine Master - Frame Size',
            'name'  => 'Copy/Mezzanine Master - Frame Size',
            /* 'description' => 'Copy/Mezzanine Master - Frame Size.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Extension
		array(
            'label' => 'Copy/Mezzanine Master - File Extension',
            'name'  => 'Copy/Mezzanine Master - File Extension',
            /* 'description' => 'Copy/Mezzanine Master - File Extension.', */
            'data_type'   => 'Tiny Text',
        ),

		// Standard and File Wrapper
		array(
            'label' => 'Copy/Mezzanine Master - Standard and File Wrapper',
            'name'  => 'Copy/Mezzanine Master - Standard and File Wrapper',
            /* 'description' => 'Copy/Mezzanine Master - Standard and File Wrapper.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Location
		array(
            'label' => 'Copy/Mezzanine Master - File Location',
            'name'  => 'Copy/Mezzanine Master - File Location',
            /* 'description' => 'Copy/Mezzanine Master - File Location.', */
            'data_type'   => 'Tiny Text',
        ),

		// Media Type
		array(
            'label' => 'Copy/Mezzanine Master - Media Type',
            'name'  => 'Copy/Mezzanine Master - Media Type',
            /* 'description' => 'Copy/Mezzanine Master - Media Type.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// File Size
		array(
            'label' => 'Copy/Mezzanine Master - File Size',
            'name'  => 'Copy/Mezzanine Master - File Size',
            /* 'description' => 'Copy/Mezzanine Master - File Size.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Duration
		array(
            'label' => 'Copy/Mezzanine Master - Duration',
            'name'  => 'Copy/Mezzanine Master - Duration',
            /* 'description' => 'Copy/Mezzanine Master - Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Colors
		array(
            'label' => 'Copy/Mezzanine Master - Colors',
            'name'  => 'Copy/Mezzanine Master - Colors',
            /* 'description' => 'Copy/Mezzanine Master - Colors.', */
            'data_type'   => 'Tiny Text',
        ),

		// Tracks
		array(
            'label' => 'Copy/Mezzanine Master - Tracks',
            'name'  => 'Copy/Mezzanine Master - Tracks',
            /* 'description' => 'Copy/Mezzanine Master - Tracks.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Copy/Mezzanine Master - Channel Configuration',
            'name'  => 'Copy/Mezzanine Master - Channel Configuration',
            /* 'description' => 'Copy/Mezzanine Master - Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Type
		array(
            'label' => 'Copy/Mezzanine Master - Track Type',
            'name'  => 'Copy/Mezzanine Master - Track Type',
            /* 'description' => 'Copy/Mezzanine Master - Track Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Encoder 
		array(
            'label' => 'Copy/Mezzanine Master - Encoder',
            'name'  => 'Copy/Mezzanine Master - Encoder',
            /* 'description' => 'Copy/Mezzanine Master - Encoder.', */
            'data_type'   => 'Tiny Text',
        ),

		// Sampling Rate
		array(
            'label' => 'Copy/Mezzanine Master - Sampling Rate',
            'name'  => 'Copy/Mezzanine Master - Sampling Rate',
            /* 'description' => 'Copy/Mezzanine Master - Sampling Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Frame Rate 
		array(
            'label' => 'Copy/Mezzanine Master - Frame Rate',
            'name'  => 'Copy/Mezzanine Master - Frame Rate',
            /* 'description' => 'Copy/Mezzanine Master - Frame Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Bit Depth  
		array(
            'label' => 'Copy/Mezzanine Master - Bit Depth',
            'name'  => 'Copy/Mezzanine Master - Bit Depth',
            /* 'description' => 'Copy/Mezzanine Master - Bit Depth.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Data Compression 
		array(
            'label' => 'Copy/Mezzanine Master - Data Compression',
            'name'  => 'Copy/Mezzanine Master - Data Compression',
            /* 'description' => 'Copy/Mezzanine Master - Data Compression.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Derived From 
		array(
            'label' => 'Copy/Mezzanine Master - Derived From',
            'name'  => 'Copy/Mezzanine Master - Derived From',
            /* 'description' => 'Copy/Mezzanine Master - Derived From.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Vendor 
		array(
            'label' => 'Copy/Mezzanine Master - Vendor',
            'name'  => 'Copy/Mezzanine Master - Vendor',
            /* 'description' => 'Copy/Mezzanine Master - Vendor.', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// File Identifier 
		array(
            'label' => 'Copy/Mezzanine Master - File Identifier',
            'name'  => 'Copy/Mezzanine Master - File Identifier',
            /* 'description' => 'Copy/Mezzanine Master - File Identifier.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// MD5 
		array(
            'label' => 'Copy/Mezzanine Master - MD5',
            'name'  => 'Copy/Mezzanine Master - MD5',
            /* 'description' => 'Copy/Mezzanine Master - MD5.', */
            'data_type'   => 'Tiny Text',
        ),

		// MD5 Date
		array(
            'label' => 'Copy/Mezzanine Master - MD5 Date',
            'name'  => 'Copy/Mezzanine Master - MD5 Date',
            /* 'description' => 'Copy/Mezzanine Master - MD5 Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Creating Application/Version 
		array(
            'label' => 'Copy/Mezzanine Master - Creating Application/Version',
            'name'  => 'Copy/Mezzanine Master - Creating Application/Version',
            /* 'description' => 'Copy/Mezzanine Master - Creating Application/Version.', */
            'data_type'   => 'Tiny Text',
        ),

		// Digitizer Manufacturer/Model 
		array(
            'label' => 'Copy/Mezzanine Master - Digitizer Manufacturer/Model',
            'name'  => 'Copy/Mezzanine Master - Digitizer Manufacturer/Model',
            /* 'description' => 'Copy/Mezzanine Master - Digitizer Manufacturer/Model.', */
            'data_type'   => 'Tiny Text',
        ),	
		
/*************** Preservation Master *******************/	
			
		// Generation
		array(
            'label' => 'Preservation Master - Generation',
            'name'  => 'Preservation Master - Generation',
            /* 'description' => 'Preservation Master - Generation.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Preservation Master - Format',
            'name'  => 'Preservation Master - Format',
            /* 'description' => 'Preservation Master - Format.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Digital File Identifier(s)
		array(
            'label' => 'Preservation Master - Digital File Identifier(s)',
            'name'  => 'Preservation Master - Digital File Identifier(s)',
            /* 'description' => 'Preservation Master - Digital File Identifier(s).', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// Creation Date
		array(
            'label' => 'Preservation Master - Creation Date',
            'name'  => 'Preservation Master - Creation Date',
            /* 'description' => 'Preservation Master - Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),			
		
		// Frame Size
		array(
            'label' => 'Preservation Master - Frame Size',
            'name'  => 'Preservation Master - Frame Size',
            /* 'description' => 'Preservation Master - Frame Size.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Extension
		array(
            'label' => 'Preservation Master - File Extension',
            'name'  => 'Preservation Master - File Extension',
            /* 'description' => 'Preservation Master - File Extension.', */
            'data_type'   => 'Tiny Text',
        ),

		// Standard and File Wrapper
		array(
            'label' => 'Preservation Master - Standard and File Wrapper',
            'name'  => 'Preservation Master - Standard and File Wrapper',
            /* 'description' => 'Preservation Master - Standard and File Wrapper.', */
            'data_type'   => 'Tiny Text',
        ),

		// File Location
		array(
            'label' => 'Preservation Master - File Location',
            'name'  => 'Preservation Master - File Location',
            /* 'description' => 'Preservation Master - File Location.', */
            'data_type'   => 'Tiny Text',
        ),

		// Media Type
		array(
            'label' => 'Preservation Master - Media Type',
            'name'  => 'Preservation Master - Media Type',
            /* 'description' => 'Preservation Master - Media Type.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// File Size
		array(
            'label' => 'Preservation Master - File Size',
            'name'  => 'Preservation Master - File Size',
            /* 'description' => 'Preservation Master - File Size.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Duration
		array(
            'label' => 'Preservation Master - Duration',
            'name'  => 'Preservation Master - Duration',
            /* 'description' => 'Preservation Master - Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Colors
		array(
            'label' => 'Preservation Master - Colors',
            'name'  => 'Preservation Master - Colors',
            /* 'description' => 'Preservation Master - Colors.', */
            'data_type'   => 'Tiny Text',
        ),

		// Tracks
		array(
            'label' => 'Preservation Master - Tracks',
            'name'  => 'Preservation Master - Tracks',
            /* 'description' => 'Preservation Master - Tracks.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Preservation Master - Channel Configuration',
            'name'  => 'Preservation Master - Channel Configuration',
            /* 'description' => 'Preservation Master - Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Type
		array(
            'label' => 'Preservation Master - Track Type',
            'name'  => 'Preservation Master - Track Type',
            /* 'description' => 'Preservation Master - Track Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Encoder 
		array(
            'label' => 'Preservation Master - Encoder',
            'name'  => 'Preservation Master - Encoder',
            /* 'description' => 'Preservation Master - Encoder.', */
            'data_type'   => 'Tiny Text',
        ),

		// Sampling Rate
		array(
            'label' => 'Preservation Master - Sampling Rate',
            'name'  => 'Preservation Master - Sampling Rate',
            /* 'description' => 'Preservation Master - Sampling Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Frame Rate 
		array(
            'label' => 'Preservation Master - Frame Rate',
            'name'  => 'Preservation Master - Frame Rate',
            /* 'description' => 'Preservation Master - Frame Rate.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Bit Depth  
		array(
            'label' => 'Preservation Master - Bit Depth',
            'name'  => 'Preservation Master - Bit Depth',
            /* 'description' => 'Preservation Master - Bit Depth.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Data Compression 
		array(
            'label' => 'Preservation Master - Data Compression',
            'name'  => 'Preservation Master - Data Compression',
            /* 'description' => 'Preservation Master - Data Compression.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Derived From 
		array(
            'label' => 'Preservation Master - Derived From',
            'name'  => 'Preservation Master - Derived From',
            /* 'description' => 'Preservation Master - Derived From.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Vendor 
		array(
            'label' => 'Preservation Master - Vendor',
            'name'  => 'Preservation Master - Vendor',
            /* 'description' => 'Preservation Master - Vendor.', */
            'data_type'   => 'Tiny Text',
        ),	
		
		// File Identifier 
		array(
            'label' => 'Preservation Master - File Identifier',
            'name'  => 'Preservation Master - File Identifier',
            /* 'description' => 'Preservation Master - File Identifier.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// MD5 
		array(
            'label' => 'Preservation Master - MD5',
            'name'  => 'Preservation Master - MD5',
            /* 'description' => 'Preservation Master - MD5.', */
            'data_type'   => 'Tiny Text',
        ),

		// MD5 Date
		array(
            'label' => 'Preservation Master - MD5 Date',
            'name'  => 'Preservation Master - MD5 Date',
            /* 'description' => 'Preservation Master - MD5 Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Creating Application/Version 
		array(
            'label' => 'Preservation Master - Creating Application/Version',
            'name'  => 'Preservation Master - Creating Application/Version',
            /* 'description' => 'Preservation Master - Creating Application/Version.', */
            'data_type'   => 'Tiny Text',
        ),

		// Source Deck Manufacturer/Model 
		array(
            'label' => 'Preservation Master - Source Deck Manufacturer/Model',
            'name'  => 'Preservation Master - Source Deck Manufacturer/Model',
            /* 'description' => 'Preservation Master - Source Deck Manufacturer/Model.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Digitizer Manufacturer/Model 
		array(
            'label' => 'Preservation Master - Digitizer Manufacturer/Model',
            'name'  => 'Preservation Master - Digitizer Manufacturer/Model',
            /* 'description' => 'Preservation Master - Digitizer Manufacturer/Model.', */
            'data_type'   => 'Tiny Text',
        ),	
	);
