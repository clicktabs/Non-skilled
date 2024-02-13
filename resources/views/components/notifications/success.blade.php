<div x-show="open" x-data="{ open: true }">
    <div class="vs vr rounded-sm text-sm hd ye">
        <div class="flex ou fe aj">
            <div class="flex">
                <svg class="oo sl ub du bl ie ra" viewBox="0 0 16 16">
                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                </svg>
                <div class="gp">{{ session('success') }}</div>
            </div>
            <button class="bc x_ ml-3 ie" @click="open = false">
                <div class="d">Close</div>
                <svg class="oo sl du">
                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
