@extends('layouts.app')
@section('content')
<main class="main-content">
        <div class="form-header">
            <div class="form-logo">
                <span>🌿 KEBUN RAYA LOGO</span>
            </div>
        </div>

        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone / Email <span class="required">*</span></label>
                <div class="phone-group">
                    <select class="form-control country-code">
                        <option value="+62">+62</option>
                        <option value="+1">+1</option>
                        <option value="+44">+44</option>
                        <option value="+81">+81</option>
                    </select>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" class="form-control" placeholder="Enter address">
                <div class="location-group">
                    <span class="location-icon">📍</span>
                    <span style="color: #3498db; font-size: 14px; cursor: pointer;">Get current location from your device</span>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Please provide details about your item and other important information, etc."></textarea>
            </div>

            <div class="form-group">
                <p style="font-size: 14px; color: #666; margin-bottom: 10px;">
                    By not declined we promise to help you identify when their item
                </p>
            </div>

            <div class="form-group">
                <label>Add Picture <span style="color: #999; font-size: 12px;">(Optional)</span></label>
                <div class="file-upload" onclick="document.getElementById('fileInput').click()">
                    <div class="file-upload-icon">📷</div>
                    <div class="file-upload-text">Click to upload or drag and drop</div>
                    <div class="file-upload-text">JPG and PNG up to 10MB</div>
                    <a href="#" class="file-upload-link">Choose File</a>
                    <div class="file-upload-note">Adding picture helps to identify the plant</div>
                </div>
                <input type="file" id="fileInput" accept="image/jpeg,image/png" style="display: none;" multiple>
            </div>

            <button type="submit" class="submit-btn">Submit Plant Item Report</button>
            
            <div class="privacy-notice">
                By submitting you agree to help receive our terms with new content
            </div>
        </form>
    </main>

@endsection