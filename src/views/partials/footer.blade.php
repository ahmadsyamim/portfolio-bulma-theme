    <!-- Footer -->
    <footer class="footer">
        <div class="section-heading">
            <p class="copyright text-center">&copy; {{ setting('site.title') }} @php echo date('Y'); @endphp. All rights reserved.</p>
        </div>
    </footer>
    </div> <!-- /.off-canvas-content -->

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    {!! Asset::scripts() !!}
    @stack('scripts')
</body>
</html>
